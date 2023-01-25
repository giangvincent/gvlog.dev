<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('head')

    <!-- Tailwind -->
    <link href="/build/css/app.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    @yield('custom-css')
</head>

<body class="bg-white font-family-karla">

    @yield('main')

    <script src="{{ mix('build/js/app.js') }}"></script>
    @yield('custom-script')
</body>

</html>
