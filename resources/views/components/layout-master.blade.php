
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('title')
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />
    <link href="/css/app.css" rel="stylesheet">
    @yield('custom-css')
  </head>
  <body>
    <!-- ====== Navbar Section Start -->
    @include('components.nav-bar')
    <!-- ====== Navbar Section End -->

    @yield('content')

    <!-- ====== Footer Section Start -->
    @include('components.footer')
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="
        hidden
        items-center
        justify-center
        bg-primary
        text-white
        w-10
        h-10
        rounded-md
        fixed
        bottom-8
        right-8
        left-auto
        z-[999]
        hover:bg-dark
        back-to-top
        shadow-md
        transition
        duration-300
        ease-in-out
      "
    >
      <span
        class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->

    @include('components.script')
    @yield('custom-script')
  </body>
</html>
