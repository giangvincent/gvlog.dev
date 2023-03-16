#!/bin/sh

projectName=$(basename -s .git `git config --get remote.origin.url`)
replace=""
projectName=${projectName//sw-shop-/$replace}

# Ask the user for the database user
read -p "$(tput setaf 2)Enter you root database user $(tput setaf 3)[root]$(tput sgr0): " dbUser
dbUser=${dbUser:-root}

# Ask the user for the database password
echo -n "$(tput setaf 2)Enter you root database password $(tput setaf 3)[root]$(tput sgr0): ":
read -s dbPassword
dbPassword=${dbPassword:-root}

mysql -u $dbUser -p$dbPassword -e "CREATE DATABASE IF NOT EXISTS $projectName;"

mysql -u $dbUser -p$dbPassword $projectName < "./database/$projectName.sql"

cp .env.init .env
# setup the environment
sed -i "" -e "s%APP_URL=http://127.0.0.1:8000%APP_URL=http://$projectName.local%" .env
sed -i "" -e "s%DATABASE_URL=mysql://root:root@localhost/shopware%DATABASE_URL=mysql://$dbUser:$dbPassword@localhost:3306/$projectName%" .env

# install shopware and dependencies according to the composer.lock
composer install --no-interaction --optimize-autoloader
composer require deployer/deployer

sed -i "" -e "s%APP_SECRET=APP_SECRET%APP_SECRET=$(php artisan key:generate)%" .env

# create database with a basic setup (admin user and storefront sales channel)
bin/console system:install --create-database --basic-setup

echo "$(tput setaf 2)Select the server you are using on you local machine:$(tput setaf 3)\n\t[0]$(tput setaf 2)Apache\n\t$(tput setaf 3)[1]$(tput setaf 2)Ngnix$(tput sgr0)"
read server
if [ "$server" == "1" ]; then
  echo "You selected Ngnix"
  read -p "$(tput setaf 2)Enter path to virtual host config directory $(tput setaf 3)[/opt/homebrew/etc/nginx/vhosts]$(tput sgr0): " directory
  directory=${directory:-/opt/homebrew/etc/nginx/vhosts}
  path="${directory}/${projectName}.local.conf"
  echo "server {" > $path
  echo "    listen 80;" >> $path
  echo "    index index.php;" >> $path
  echo "    server_name $projectName.local;" >> $path
  echo "    root $PWD/public;" >> $path
  echo "    location / {" >> $path
  echo "        try_files \$uri /index.php\$is_args\$args;" >> $path
  echo "    }" >> $path
  echo "    location ~ \.php$ {" >> $path
  echo "        fastcgi_split_path_info ^(.+\.php)(/.+)$;" >> $path
  echo "        include fastcgi.conf;" >> $path
  echo "        fastcgi_buffers 8 16k;" >> $path
  echo "        fastcgi_buffer_size 32k;" >> $path
  echo "        fastcgi_read_timeout 300s;" >> $path
  echo "        client_body_buffer_size 128k;" >> $path
  echo "        http2_push_preload on;" >> $path
  echo "        fastcgi_pass 127.0.0.1:9000;" >> $path
  echo "        fastcgi_index index.php;" >> $path
  echo "        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;" >> $path
  echo "        include fastcgi_params;" >> $path
  echo "    }" >> $path
  echo "}" >> $path
  echo "Enter you sudo password:"
  sudo -- sh -c "echo \"\n127.0.0.1\t${projectName}.local\" >> /private/etc/hosts"
  sudo -- sh -c "echo \"::1      \t${projectName}.local\" >> /private/etc/hosts"
  brew services restart nginx
else
  echo "You selected Apache"
  read -p "$(tput setaf 2)Enter path to virtual host config directory $(tput setaf 3)[/opt/homebrew/etc/httpd/vhosts]$(tput sgr0): " directory
  directory=${directory:-/opt/homebrew/etc/httpd/vhosts}
  path="${directory}/${projectName}.local.conf"
  echo "<VirtualHost *:80>" > $path
  echo "    ServerName ${projectName}.local" >> $path
  echo "    DocumentRoot $PWD/public/" >> $path
  echo "    <Directory $PWD>" >> $path
  echo "        Options Indexes FollowSymLinks MultiViews Includes execCGI " >> $path
  echo "        AllowOverride All" >> $path
  echo "        Require all granted" >> $path
  echo "    </Directory>" >> $path
  echo "</VirtualHost>" >> $path
  echo "Enter you sudo password:"
  sudo -- sh -c "echo \"\n127.0.0.1\t${projectName}.local\" >> /private/etc/hosts"
  sudo -- sh -c "echo \"::1      \t${projectName}.local\" >> /private/etc/hosts"
  brew services restart httpd
fi
echo "Project initialized with virtual host: http://${projectName}.local"
open http://${projectName}.local
