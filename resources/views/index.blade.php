@extends('components.layout-master')

@section('title')
<title>
  GV Log
</title>
@endsection

@section('content')
    <!-- ====== Hero Section Start -->
    <div
      id="home"
      class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary"
    >
      <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div
              class="
                hero-content
                text-center
                max-w-[780px]
                mx-auto
                wow
                fadeInUp
              "
              data-wow-delay=".2s"
            >
              <h1
                class="
                  text-white
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[45px]
                  leading-snug
                  sm:leading-snug
                  md:leading-snug
                  mb-8
                "
              >
                Open-Source Web Template for SaaS, Startup, Apps, and More
              </h1>
              <p
                class="
                  text-base
                  sm:text-lg sm:leading-relaxed
                  md:text-xl md:leading-relaxed
                  mx-auto
                  mb-10
                  text-[#e4e4e4]
                  max-w-[600px]
                "
              >
                Multidisciplinary Web Template Built with Your Favourite
                Technology - HTML Bootstrap, Tailwind and React NextJS.
              </p>
              <ul class="flex flex-wrap items-center justify-center mb-10">
                <li>
                  <a
                    href="https://links.tailgrids.com/play-download"
                    class="
                      py-4
                      px-6
                      sm:px-10
                      inline-flex
                      items-center
                      justify-center
                      text-center text-dark text-base
                      bg-white
                      hover:text-primary hover:shadow-lg
                      font-medium
                      rounded-lg
                      transition
                      duration-300
                      ease-in-out
                    "
                  >
                    Download Now
                  </a>
                </li>
                <li>
                  <a
                    href="https://github.com/tailgrids/play-tailwind"
                    target="_blank"
                    class="
                      text-base
                      font-medium
                      text-white
                      py-4
                      px-6
                      sm:px-10
                      flex
                      items-center
                      hover:opacity-70
                      transition
                      duration-300
                      ease-in-out
                    "
                  >
                    Star on Github
                    <span class="pl-2">
                      <svg
                        width="20"
                        height="8"
                        viewBox="0 0 20 8"
                        class="fill-current"
                      >
                        <path
                          d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2812 0.281319C16.0625 0.468819 16.0312 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0312 7.21882 16.0625 7.56257 16.2812 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7812 7.90632 16.9375 7.84382 17.0312 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z"
                        />
                      </svg>
                    </span>
                  </a>
                </li>
              </ul>
              <div class="text-center wow fadeInUp" data-wow-delay=".3s">
                <img
                  src="assets/images/hero/brand.svg"
                  alt="image"
                  class="
                    max-w-[250px]
                    w-full
                    mx-auto
                    opacity-50
                    hover:opacity-100
                    transition
                    duration-300
                    ease-in-out
                  "
                />
              </div>
            </div>
          </div>

          <div class="w-full px-4">
            <div
              class="mx-auto max-w-[845px] relative z-10 wow fadeInUp"
              data-wow-delay=".25s"
            >
              <div class="mt-16">
                <img
                  src="assets/images/hero/hero-image.jpg"
                  alt="hero"
                  class="max-w-full mx-auto rounded-t-xl rounded-tr-xl"
                />
              </div>
              <div class="absolute z-[-1] bottom-0 -left-9">
                <svg
                  width="134"
                  height="106"
                  viewBox="0 0 134 106"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="1.66667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 1.66667 104)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 16.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 31 104)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 45.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 60.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 88.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 117.667 104)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 74.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 103 104)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 132 104)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 1.66667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 16.3333 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 31 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 45.6667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 103 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 132 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="74.6673"
                    r="1.66667"
                    transform="rotate(-90 1.66667 74.6673)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 16.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 31 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 31 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 45.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 60.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 60.3333 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 88.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 88.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 117.667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 117.667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 74.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 74.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 103 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 103 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 132 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 132 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 31 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 31 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 60.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 60.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 88.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 88.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 117.667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 117.667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 74.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 74.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 103 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 103 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 132 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 132 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 1.66667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 16.3333 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 31 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 31 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 45.6667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 60.3333 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 88.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 117.667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 74.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 103 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 103 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 132 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 132 1.66707)"
                    fill="white"
                  />
                </svg>
              </div>
              <div class="absolute z-[-1] -top-6 -right-6">
                <svg
                  width="134"
                  height="106"
                  viewBox="0 0 134 106"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="1.66667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 1.66667 104)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 16.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 31 104)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 45.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 60.3333 104)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 88.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 117.667 104)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 74.6667 104)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 103 104)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="104"
                    r="1.66667"
                    transform="rotate(-90 132 104)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 1.66667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 16.3333 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 31 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="89.3333"
                    r="1.66667"
                    transform="rotate(-90 45.6667 89.3333)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 103 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="89.3338"
                    r="1.66667"
                    transform="rotate(-90 132 89.3338)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="74.6673"
                    r="1.66667"
                    transform="rotate(-90 1.66667 74.6673)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 16.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 31 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 31 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 45.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="31.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 31.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 60.3333 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 60.3333 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 88.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 88.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 117.667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 117.667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 74.6667 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 74.6667 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 103 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 103 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="74.6668"
                    r="1.66667"
                    transform="rotate(-90 132 74.6668)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="31.0001"
                    r="1.66667"
                    transform="rotate(-90 132 31.0001)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 1.66667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 16.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 31 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 31 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 45.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 60.3333 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 60.3333 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 88.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 88.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 117.667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 117.667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 74.6667 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 74.6667 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 103 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 103 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="60.0003"
                    r="1.66667"
                    transform="rotate(-90 132 60.0003)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="16.3336"
                    r="1.66667"
                    transform="rotate(-90 132 16.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 1.66667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="1.66667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 1.66667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 16.3333 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="16.3333"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 16.3333 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 31 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="31"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 31 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="45.3336"
                    r="1.66667"
                    transform="rotate(-90 45.6667 45.3336)"
                    fill="white"
                  />
                  <circle
                    cx="45.6667"
                    cy="1.66683"
                    r="1.66667"
                    transform="rotate(-90 45.6667 1.66683)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 60.3333 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="60.3333"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 60.3333 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 88.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="88.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 88.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 117.667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="117.667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 117.667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 74.6667 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="74.6667"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 74.6667 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 103 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="103"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 103 1.66707)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="45.3338"
                    r="1.66667"
                    transform="rotate(-90 132 45.3338)"
                    fill="white"
                  />
                  <circle
                    cx="132"
                    cy="1.66707"
                    r="1.66667"
                    transform="rotate(-90 132 1.66707)"
                    fill="white"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Features Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-8 lg:pb-[70px]">
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mb-12 lg:mb-20 max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                Features
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                "
              >
                Main Features Of Play
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/4 px-4">
            <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".1s">
              <div
                class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  relative
                  z-10
                "
              >
                <span
                  class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-primary bg-opacity-20
                    rounded-2xl
                    mb-8
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[25deg]
                    group-hover:rotate-45
                    duration-300
                  "
                ></span>
                <svg
                  width="35"
                  height="35"
                  viewBox="0 0 52 52"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M44.9313 11.7H38.9188C40.5438 10.9687 41.7626 9.99374 42.2501 8.69374C42.9001 6.98749 42.2501 5.19999 40.3001 3.33124C38.1876 1.29999 35.9938 0.568738 33.8001 1.13749C29.9813 2.11249 27.4626 7.06874 26.2438 9.99374C25.1063 7.06874 22.5876 2.11249 18.6876 1.13749C16.4938 0.568738 14.3001 1.29999 12.1876 3.33124C10.2376 5.19999 9.5876 6.98749 10.2376 8.69374C10.7251 9.99374 12.0251 10.9687 13.5688 11.7H7.06885C5.0376 11.7 3.4126 13.325 3.4126 15.3562V21.5312C3.4126 23.5625 5.0376 25.1875 7.06885 25.1875H7.71885V46.2312C7.71885 48.8312 9.83135 51.025 12.5126 51.025H40.1376C42.7376 51.025 44.9313 48.9125 44.9313 46.2312V25.1875C46.9626 25.1875 48.5876 23.5625 48.5876 21.5312V15.3562C48.5063 13.325 46.8813 11.7 44.9313 11.7ZM34.5313 3.98124C34.7751 3.89999 35.0188 3.89999 35.1813 3.89999C36.1563 3.89999 37.2126 4.38749 38.2688 5.52499C38.7563 6.01249 39.8126 7.06874 39.5688 7.79999C39.0001 9.34374 33.9626 10.6437 28.9251 11.05C30.0626 8.36874 32.1751 4.54999 34.5313 3.98124ZM13.0001 7.71874C12.7563 6.98749 13.8126 5.93124 14.3001 5.44374C15.4376 4.38749 16.4126 3.81874 17.3876 3.81874C17.6313 3.81874 17.8751 3.81874 18.0376 3.89999C20.4751 4.54999 22.5063 8.28749 23.6438 10.9687C18.6063 10.5625 13.5688 9.26249 13.0001 7.71874ZM42.0063 46.2312C42.0063 47.2875 41.1126 48.1812 40.0563 48.1812H12.4313C11.3751 48.1812 10.4813 47.2875 10.4813 46.2312V25.1875H41.9251V46.2312H42.0063ZM45.6626 21.5312C45.6626 22.0187 45.3376 22.3437 44.8501 22.3437H7.06885C6.6626 22.3437 6.25635 22.0187 6.25635 21.5312V15.3562C6.25635 14.95 6.6626 14.5437 7.06885 14.5437H44.8501C45.2563 14.5437 45.6626 14.8687 45.6626 15.3562V21.5312Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="font-bold text-xl text-dark mb-3">
                Free and Open-Source
              </h4>
              <p class="text-body-color mb-8 lg:mb-11">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="font-medium text-base text-body-color hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-4">
            <div
              class="bg-white mb-12 group wow fadeInUp"
              data-wow-delay=".15s"
            >
              <div
                class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  relative
                  z-10
                "
              >
                <span
                  class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-primary bg-opacity-20
                    rounded-2xl
                    mb-8
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[25deg]
                    group-hover:rotate-45
                    duration-300
                  "
                ></span>
                <svg
                  width="35"
                  height="35"
                  viewBox="0 0 52 52"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M49.8062 23.3187L43.875 17.3875C43.3063 16.8187 42.4125 16.8187 41.8438 17.3875C41.275 17.9562 41.275 18.85 41.8438 19.4187L46.9625 24.6187H27.4625V4.87498L32.5812 10.075C33.15 10.6437 34.0437 10.6437 34.6125 10.075C35.1812 9.50623 35.1812 8.61248 34.6125 8.04373L28.6812 2.11248C27.95 1.38123 26.975 0.974976 26 0.974976C24.9438 0.974976 24.05 1.38123 23.3188 2.11248L17.3875 8.04373C16.8187 8.61248 16.8187 9.50623 17.3875 10.075C17.6312 10.3187 18.0375 10.4812 18.3625 10.4812C18.6875 10.4812 19.0937 10.3187 19.3375 10.075L24.6187 4.87498V24.5375H4.95625L10.075 19.3375C10.6437 18.7687 10.6437 17.875 10.075 17.3062C9.50625 16.7375 8.6125 16.7375 8.04375 17.3062L2.1125 23.2375C0.65 24.7 0.65 27.1375 2.1125 28.6L8.04375 34.5312C8.2875 34.775 8.69375 34.9375 9.01875 34.9375C9.34375 34.9375 9.75 34.775 9.99375 34.5312C10.5625 33.9625 10.5625 33.0687 9.99375 32.5L4.79375 27.3H24.4563V47.125L19.2563 41.925C18.6875 41.3562 17.7938 41.3562 17.225 41.925C16.6563 42.4937 16.6563 43.3875 17.225 43.9562L23.1562 49.8875C23.8875 50.6187 24.8625 51.025 25.8375 51.025C26.8937 51.025 27.7875 50.6187 28.5187 49.8875L34.45 43.9562C35.0188 43.3875 35.0188 42.4937 34.45 41.925C33.8813 41.3562 32.9875 41.3562 32.4188 41.925L27.4625 47.125V27.3812H47.0438L41.8438 32.5812C41.275 33.15 41.275 34.0437 41.8438 34.6125C42.0875 34.8562 42.4938 35.0187 42.8188 35.0187C43.1438 35.0187 43.55 34.8562 43.7938 34.6125L49.725 28.6812C51.2688 27.2187 51.2687 24.7812 49.8062 23.3187Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="font-bold text-xl text-dark mb-3">
                Multipurpose Template
              </h4>
              <p class="text-body-color mb-8 lg:mb-11">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="font-medium text-base text-body-color hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-4">
            <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
              <div
                class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  relative
                  z-10
                "
              >
                <span
                  class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-primary bg-opacity-20
                    rounded-2xl
                    mb-8
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[25deg]
                    group-hover:rotate-45
                    duration-300
                  "
                ></span>
                <svg
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z"
                    fill="white"
                  />
                  <path
                    d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z"
                    fill="white"
                  />
                  <path
                    d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z"
                    fill="white"
                  />
                  <path
                    d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="font-bold text-xl text-dark mb-3">
                High-quality Design
              </h4>
              <p class="text-body-color mb-8 lg:mb-11">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="font-medium text-base text-body-color hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-4">
            <div
              class="bg-white mb-12 group wow fadeInUp"
              data-wow-delay=".25s"
            >
              <div
                class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  relative
                  z-10
                "
              >
                <span
                  class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-primary bg-opacity-20
                    rounded-2xl
                    mb-8
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[25deg]
                    group-hover:rotate-45
                    duration-300
                  "
                ></span>
                <svg
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M29.5312 21.6562L28.6563 21.1641L29.6953 20.5625C30.7344 19.9062 31.3359 18.8125 31.2812 17.6094C31.2266 16.4063 30.625 15.3125 29.5312 14.7109L27.8906 13.7813L29.6406 12.6875C30.6797 12.0313 31.2812 10.9375 31.2266 9.73438C31.1719 8.53125 30.5703 7.4375 29.4766 6.83594L19.25 1.09375C18.2109 0.492187 16.9531 0.546875 15.9141 1.09375L5.41406 7.21875C4.375 7.82031 3.71875 8.91406 3.71875 10.1172C3.71875 11.3203 4.375 12.4141 5.41406 13.0156L7.10938 14L5.41406 14.9844C4.375 15.5859 3.71875 16.6797 3.71875 17.8828C3.71875 19.0859 4.32031 20.1797 5.41406 20.7812L6.39844 21.3281L5.46875 21.875C4.42969 22.4766 3.77344 23.5703 3.77344 24.7734C3.77344 25.9766 4.375 27.0703 5.46875 27.6719L15.9141 33.6875C16.4609 34.0156 17.0078 34.125 17.6094 34.125C18.2109 34.125 18.8125 33.9609 19.3594 33.6328L29.6953 27.2891C30.7344 26.6328 31.3359 25.5391 31.2812 24.3359C31.2266 23.2969 30.625 22.2031 29.5312 21.6562ZM5.63281 10.1172C5.63281 9.57031 5.90625 9.13281 6.34375 8.85938L16.8438 2.78906C17.0625 2.67969 17.3359 2.57031 17.5547 2.57031C17.7734 2.57031 18.0469 2.625 18.2656 2.73437L28.5469 8.47656C28.9844 8.75 29.2578 9.1875 29.3125 9.73438C29.3125 10.2812 29.0391 10.7188 28.6016 10.9922L18.3203 17.3906C17.8828 17.6641 17.2812 17.6641 16.8438 17.3906L6.39844 11.375C5.90625 11.1562 5.63281 10.6641 5.63281 10.1172ZM5.63281 17.9375C5.63281 17.3906 5.90625 16.9531 6.34375 16.6797L9.02344 15.1484L15.8594 19.0859C16.4062 19.4141 16.9531 19.5234 17.5547 19.5234C18.1562 19.5234 18.7578 19.3594 19.3047 19.0312L26.0312 14.875L28.6016 16.2969C29.0391 16.5703 29.3125 17.0078 29.3672 17.5547C29.3672 18.1016 29.0938 18.5391 28.6563 18.8125L18.3203 25.2656C17.8828 25.5391 17.2812 25.5391 16.8438 25.2656L6.39844 19.25C5.90625 18.9766 5.63281 18.4844 5.63281 17.9375ZM28.6563 25.8125L18.3203 32.2109C17.8828 32.4844 17.2812 32.4844 16.8438 32.2109L6.39844 26.1953C5.96094 25.9219 5.6875 25.4844 5.6875 24.9375C5.6875 24.3906 5.96094 23.9531 6.39844 23.6797L8.3125 22.5859L15.8594 26.9609C16.4062 27.2891 16.9531 27.3984 17.5547 27.3984C18.1562 27.3984 18.7578 27.2344 19.3047 26.9062L26.7969 22.2578L28.6563 23.2969C29.0938 23.5703 29.3672 24.0078 29.4219 24.5547C29.3672 25.0469 29.0938 25.5391 28.6563 25.8125Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="font-bold text-xl text-dark mb-3">
                All Essential Elements
              </h4>
              <p class="text-body-color mb-8 lg:mb-11">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="font-medium text-base text-body-color hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Features Section End -->

    <!-- ====== About Section Start -->
    <section
      id="about"
      class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]"
    >
      <div class="container">
        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
              <div
                class="
                  lg:flex
                  items-center
                  justify-between
                  border
                  overflow-hidden
                "
              >
                <div
                  class="
                    lg:max-w-[565px]
                    xl:max-w-[640px]
                    w-full
                    py-12
                    px-7
                    sm:px-12
                    md:p-16
                    lg:py-9 lg:px-16
                    xl:p-[70px]
                  "
                >
                  <span
                    class="
                      text-sm
                      font-medium
                      text-white
                      py-2
                      px-5
                      bg-primary
                      inline-block
                      mb-5
                    "
                  >
                    About Us
                  </span>
                  <h2
                    class="
                      font-bold
                      text-3xl
                      sm:text-4xl
                      2xl:text-[40px]
                      sm:leading-snug
                      text-dark
                      mb-6
                    "
                  >
                    Brilliant Toolkit to Build Nextgen Website Faster.
                  </h2>
                  <p class="text-base text-body-color mb-9 leading-relaxed">
                    The main ‘thrust' is to focus on educating attendees on how
                    to best protect highly vulnerable business applications with
                    interactive panel discussions and roundtables led by subject
                    matter experts.
                  </p>
                  <p class="text-base text-body-color mb-9 leading-relaxed">
                    The main ‘thrust' is to focus on educating attendees on how
                    to best protect highly vulnerable business applications with
                    interactive panel.
                  </p>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-flex
                      items-center
                      justify-center
                      py-4
                      px-6
                      rounded
                      text-white
                      bg-primary
                      text-base
                      font-medium
                      hover:bg-opacity-90 hover:shadow-lg
                      transition
                      duration-300
                      ease-in-out
                    "
                  >
                    Learn More
                  </a>
                </div>
                <div class="text-center">
                  <div class="relative inline-block z-10">
                    <img
                      src="assets/images/about/about-image.svg"
                      alt="image"
                      class="mx-auto lg:ml-auto"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== Pricing Section Start -->
    <section
      id="pricing"
      class="
        bg-white
        pt-20
        lg:pt-[120px]
        pb-12
        lg:pb-[90px]
        relative
        z-20
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                Pricing Table
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                "
              >
                Our Pricing Plan
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap items-center justify-center">
          <div class="w-full md:w-1/2 lg:w-1/3">
            <div
              class="
                bg-white
                rounded-xl
                relative
                z-10
                overflow-hidden
                border border-primary border-opacity-20
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <span
                class="text-dark font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
              <h2 class="font-semibold text-primary mb-9 text-[28px]">
                $ 19.99/mo
              </h2>

              <div class="mb-10">
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  1 User
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  All UI components
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Lifetime access
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Free updates
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Use on 1 (one) project
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  3 Months support
                </p>
              </div>
              <div class="w-full">
                <a
                  href="javascript:void(0)"
                  class="
                    inline-block
                    text-base
                    font-medium
                    text-primary
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-primary hover:border-primary
                    transition
                    duration-300
                    ease-in-out
                  "
                >
                  Purchase Now
                </a>
              </div>
              <span
                class="
                  absolute
                  left-0
                  bottom-0
                  z-[-1]
                  w-14
                  h-14
                  rounded-tr-full
                  block
                  bg-primary
                "
              >
              </span>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3">
            <div
              class="
                bg-primary bg-gradient-to-b
                from-primary
                to-[#179BEE]
                rounded-xl
                relative
                z-10
                overflow-hidden
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <span
                class="
                  inline-block
                  py-2
                  px-6
                  border border-white
                  rounded-full
                  text-base
                  font-semibold
                  text-primary
                  bg-white
                  uppercase
                  mb-5
                "
              >
                POPULAR
              </span>
              <span
                class="text-white font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
              <h2 class="font-semibold text-white mb-9 text-[28px]">
                $ 19.99/mo
              </h2>

              <div class="mb-10">
                <p class="text-base font-medium text-white leading-loose mb-1">
                  5 User
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  All UI components
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  Lifetime access
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  Free updates
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  Use on 1 (one) project
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  4 Months support
                </p>
              </div>
              <div class="w-full">
                <a
                  href="javascript:void(0)"
                  class="
                    inline-block
                    text-base
                    font-medium
                    text-dark
                    bg-white
                    border border-white
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-dark hover:border-dark
                    transition
                    duration-300
                    ease-in-out
                  "
                >
                  Purchase Now
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3">
            <div
              class="
                bg-white
                rounded-xl
                relative
                z-10
                overflow-hidden
                border border-primary border-opacity-20
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <span
                class="text-dark font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
              <h2 class="font-semibold text-primary mb-9 text-[28px]">
                $ 70.99/mo
              </h2>

              <div class="mb-10">
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  1 User
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  All UI components
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Lifetime access
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Free updates
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Use on unlimited project
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  4 Months support
                </p>
              </div>
              <div class="w-full">
                <a
                  href="javascript:void(0)"
                  class="
                    inline-block
                    text-base
                    font-medium
                    text-primary
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-primary hover:border-primary
                    transition
                    duration-300
                    ease-in-out
                  "
                >
                  Purchase Now
                </a>
              </div>

              <span
                class="
                  absolute
                  right-0
                  top-0
                  z-[-1]
                  w-14
                  h-14
                  rounded-bl-full
                  block
                  bg-secondary
                "
              >
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Pricing Section End -->

    <!-- ====== Faq Section Start -->
    <section
      class="
        bg-[#f3f4ff]
        pt-20
        lg:pt-[120px]
        pb-12
        lg:pb-[90px]
        relative
        z-20
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                FAQ
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                "
              >
                Any Questions? Answered
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4">
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    How to use TailGrids?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    How to download icons from LineIcons?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".2s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Is GrayGrids part of UIdeck?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4">
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Can I use this template for commercial project?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Do you have plan to releasing Play Pro?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".2s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Where and how to host this template?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="absolute bottom-0 right-0 z-[-1]">
        <svg
          width="1440"
          height="886"
          viewBox="0 0 1440 886"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            opacity="0.5"
            d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
            fill="url(#paint0_linear)"
          />
          <defs>
            <linearGradient
              id="paint0_linear"
              x1="1308.65"
              y1="1142.58"
              x2="602.827"
              y2="-418.681"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#3056D3" stop-opacity="0.36" />
              <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
              <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </section>
    <!-- ====== Faq Section End -->

    <!-- ====== Testimonials Start ====== -->
    <section id="testimonials" class="pt-20 md:pt-[120px]">
      <div class="container px-4">
        <div class="flex flex-wrap">
          <div class="w-full mx-4">
            <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                Testimonials
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                "
              >
                What our Client Say
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap">
          <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
              class="
                ud-single-testimonial
                p-8
                bg-white
                mb-12
                shadow-testimonial
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <div class="ud-testimonial-ratings flex items-center mb-3">
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
              </div>
              <div class="ud-testimonial-content mb-6">
                <p class="text-base tracking-wide text-body-color">
                  “Our members are so impressed. It's intuitive. It's clean.
                  It's distraction free. If you're building a community.
                </p>
              </div>
              <div class="ud-testimonial-info flex items-center">
                <div
                  class="
                    ud-testimonial-image
                    w-[50px]
                    h-[50px]
                    rounded-full
                    overflow-hidden
                    mr-5
                  "
                >
                  <img
                    src="assets/images/testimonials/author-01.png"
                    alt="author"
                  />
                </div>
                <div class="ud-testimonial-meta">
                  <h4 class="text-sm font-semibold">Sabo Masties</h4>
                  <p class="text-[#969696] text-xs">Founder @ Rolex</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
              class="
                ud-single-testimonial
                p-8
                bg-white
                mb-12
                shadow-testimonial
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <div class="ud-testimonial-ratings flex items-center mb-3">
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
              </div>
              <div class="ud-testimonial-content mb-6">
                <p class="text-base tracking-wide text-body-color">
                  “Our members are so impressed. It's intuitive. It's clean.
                  It's distraction free. If you're building a community.
                </p>
              </div>
              <div class="ud-testimonial-info flex items-center">
                <div
                  class="
                    ud-testimonial-image
                    w-[50px]
                    h-[50px]
                    rounded-full
                    overflow-hidden
                    mr-5
                  "
                >
                  <img
                    src="assets/images/testimonials/author-02.png"
                    alt="author"
                  />
                </div>
                <div class="ud-testimonial-meta">
                  <h4 class="text-sm font-semibold">Margin Gesmu</h4>
                  <p class="text-[#969696] text-xs">Founder @ UI Hunter</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
              class="
                ud-single-testimonial
                p-8
                bg-white
                mb-12
                shadow-testimonial
                wow
                fadeInUp
              "
              data-wow-delay=".2s
              "
            >
              <div class="ud-testimonial-ratings flex items-center mb-3">
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                <span class="text-[#fbb040] mr-1">
                  <svg
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    class="fill-current"
                  >
                    <path
                      d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
              </div>
              <div class="ud-testimonial-content mb-6">
                <p class="text-base tracking-wide text-body-color">
                  “Our members are so impressed. It's intuitive. It's clean.
                  It's distraction free. If you're building a community.
                </p>
              </div>
              <div class="ud-testimonial-info flex items-center">
                <div
                  class="
                    ud-testimonial-image
                    w-[50px]
                    h-[50px]
                    rounded-full
                    overflow-hidden
                    mr-5
                  "
                >
                  <img
                    src="assets/images/testimonials/author-03.png"
                    alt="author"
                  />
                </div>
                <div class="ud-testimonial-meta">
                  <h4 class="text-sm font-semibold">William Smith</h4>
                  <p class="text-[#969696] text-xs">Founder @ Trorex</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full mx-4">
            <div class="wow fadeInUp" data-wow-delay=".2s">
              <div class="ud-title mb-8">
                <h6
                  class="
                    text-xs
                    font-normal
                    text-body-color
                    relative
                    inline-flex
                    items-center
                  "
                >
                  Some Of Our Clients
                  <span class="w-8 h-[1px] inline-block bg-[#afb2b5] ml-4">
                  </span>
                </h6>
              </div>
              <div class="ud-brands-logo flex items-center flex-wrap">
                <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                  <a
                    href="https://tailgrids.com"
                    target="_blank"
                    rel="nofollow noopner"
                  >
                    <img
                      src="assets/images/brands/tailgrids.svg"
                      alt="tailgrids"
                      class="grayscale hover:filter-none duration-300"
                    />
                  </a>
                </div>
                <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                  <a
                    href="https://ayroui.com"
                    target="_blank"
                    rel="nofollow noopner"
                  >
                    <img
                      src="assets/images/brands/ayroui.svg"
                      alt="ayroui"
                      class="grayscale hover:filter-none duration-300"
                    />
                  </a>
                </div>
                <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                  <a
                    href="https://uideck.com"
                    target="_blank"
                    rel="nofollow noopner"
                  >
                    <img
                      src="assets/images/brands/uideck.svg"
                      alt="uideck"
                      class="grayscale hover:filter-none duration-300"
                    />
                  </a>
                </div>
                <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                  <a
                    href="https://graygrids.com"
                    target="_blank"
                    rel="nofollow noopner"
                  >
                    <img
                      src="assets/images/brands/graygrids.svg"
                      alt="graygrids"
                      class="grayscale hover:filter-none duration-300"
                    />
                  </a>
                </div>
                <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                  <a
                    href="https://lineicons.com"
                    target="_blank"
                    rel="nofollow noopner"
                  >
                    <img
                      src="assets/images/brands/lineicons.svg"
                      alt="lineicons"
                      class="grayscale hover:filter-none duration-300"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Testimonials End ====== -->

    <!-- ====== Team Section Start -->
    <section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                Our Team
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                "
              >
                Meet Our Team
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              >
                <img
                  src="assets/images/team/team-01.png"
                  alt="image"
                  class="w-full rounded-full"
                />
                <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                    width="71"
                    height="82"
                    viewBox="0 0 71 82"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.29337"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 1.29337 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 12.6747 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 24.0575 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 35.4379 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 46.8197 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 68.807 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 57.9443 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 1.29337 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 12.6747 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 24.0575 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 35.4379 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 46.8197 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 68.807 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 57.9433 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 1.29337 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 1.29337 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 12.6747 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 12.6747 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 24.0575 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 24.0575 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 35.4379 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 35.4379 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 46.8197 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 46.8197 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 68.807 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 68.807 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 57.9433 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 57.9443 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 1.29337 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 1.29337 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 12.6747 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 12.6747 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 24.0575 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 24.0575 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 35.4379 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 35.4379 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 46.8197 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 46.8197 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 68.807 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 68.807 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 57.9433 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 57.9443 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 1.29337 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 1.29337 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 12.6747 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 12.6747 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 24.0575 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 24.0575 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 35.4379 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 35.4379 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 46.8197 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 46.8197 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 68.807 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 68.807 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 57.9443 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 57.9443 1.29354)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
                <span class="absolute right-0 bottom-0">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                      stroke="#13C296"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">
                  Adveen Desuza
                </h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  UI Designer
                </p>
                <div class="flex items-center justify-center">
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="10"
                      height="18"
                      viewBox="0 0 10 18"
                      class="fill-current"
                    >
                      <path
                        d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="14"
                      viewBox="0 0 18 14"
                      class="fill-current"
                    >
                      <path
                        d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      class="fill-current"
                    >
                      <path
                        d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                      />
                      <path
                        d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                      />
                      <path
                        d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".15s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              >
                <img
                  src="assets/images/team/team-02.png"
                  alt="image"
                  class="w-full rounded-full"
                />
                <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                    width="71"
                    height="82"
                    viewBox="0 0 71 82"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.29337"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 1.29337 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 12.6747 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 24.0575 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 35.4379 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 46.8197 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 68.807 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 57.9443 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 1.29337 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 12.6747 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 24.0575 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 35.4379 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 46.8197 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 68.807 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 57.9433 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 1.29337 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 1.29337 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 12.6747 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 12.6747 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 24.0575 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 24.0575 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 35.4379 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 35.4379 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 46.8197 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 46.8197 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 68.807 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 68.807 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 57.9433 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 57.9443 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 1.29337 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 1.29337 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 12.6747 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 12.6747 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 24.0575 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 24.0575 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 35.4379 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 35.4379 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 46.8197 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 46.8197 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 68.807 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 68.807 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 57.9433 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 57.9443 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 1.29337 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 1.29337 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 12.6747 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 12.6747 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 24.0575 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 24.0575 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 35.4379 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 35.4379 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 46.8197 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 46.8197 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 68.807 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 68.807 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 57.9443 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 57.9443 1.29354)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
                <span class="absolute right-0 bottom-0">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                      stroke="#13C296"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">Jezmin uniya</h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  Product Designer
                </p>
                <div class="flex items-center justify-center">
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="10"
                      height="18"
                      viewBox="0 0 10 18"
                      class="fill-current"
                    >
                      <path
                        d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="14"
                      viewBox="0 0 18 14"
                      class="fill-current"
                    >
                      <path
                        d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      class="fill-current"
                    >
                      <path
                        d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                      />
                      <path
                        d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                      />
                      <path
                        d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".2s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              >
                <img
                  src="assets/images/team/team-03.png"
                  alt="image"
                  class="w-full rounded-full"
                />
                <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                    width="71"
                    height="82"
                    viewBox="0 0 71 82"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.29337"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 1.29337 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 12.6747 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 24.0575 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 35.4379 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 46.8197 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 68.807 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 57.9443 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 1.29337 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 12.6747 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 24.0575 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 35.4379 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 46.8197 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 68.807 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 57.9433 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 1.29337 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 1.29337 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 12.6747 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 12.6747 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 24.0575 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 24.0575 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 35.4379 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 35.4379 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 46.8197 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 46.8197 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 68.807 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 68.807 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 57.9433 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 57.9443 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 1.29337 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 1.29337 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 12.6747 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 12.6747 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 24.0575 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 24.0575 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 35.4379 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 35.4379 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 46.8197 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 46.8197 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 68.807 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 68.807 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 57.9433 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 57.9443 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 1.29337 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 1.29337 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 12.6747 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 12.6747 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 24.0575 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 24.0575 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 35.4379 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 35.4379 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 46.8197 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 46.8197 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 68.807 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 68.807 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 57.9443 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 57.9443 1.29354)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
                <span class="absolute right-0 bottom-0">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                      stroke="#13C296"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">
                  Andrieo Gloree
                </h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  App Developer
                </p>
                <div class="flex items-center justify-center">
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="10"
                      height="18"
                      viewBox="0 0 10 18"
                      class="fill-current"
                    >
                      <path
                        d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="14"
                      viewBox="0 0 18 14"
                      class="fill-current"
                    >
                      <path
                        d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      class="fill-current"
                    >
                      <path
                        d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                      />
                      <path
                        d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                      />
                      <path
                        d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".25s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              >
                <img
                  src="assets/images/team/team-01.png"
                  alt="image"
                  class="w-full rounded-full"
                />
                <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                    width="71"
                    height="82"
                    viewBox="0 0 71 82"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.29337"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 1.29337 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 12.6747 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 24.0575 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 35.4379 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 46.8197 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 68.807 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="80.7066"
                      r="1.29337"
                      transform="rotate(-90 57.9443 80.7066)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 1.29337 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 12.6747 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 24.0575 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="69.3249"
                      r="1.29337"
                      transform="rotate(-90 35.4379 69.3249)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 46.8197 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 68.807 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="69.325"
                      r="1.29337"
                      transform="rotate(-90 57.9433 69.325)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 1.29337 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 1.29337 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 12.6747 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 12.6747 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 24.0575 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 24.0575 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="57.9433"
                      r="1.29337"
                      transform="rotate(-90 35.4379 57.9433)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="24.0568"
                      r="1.29337"
                      transform="rotate(-90 35.4379 24.0568)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 46.8197 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 46.8197 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 68.807 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 68.807 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="57.9431"
                      r="1.29337"
                      transform="rotate(-90 57.9433 57.9431)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="24.0567"
                      r="1.29337"
                      transform="rotate(-90 57.9443 24.0567)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 1.29337 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 1.29337 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 12.6747 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 12.6747 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 24.0575 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 24.0575 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 35.4379 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 35.4379 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 46.8197 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 46.8197 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 68.807 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 68.807 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9433"
                      cy="46.5615"
                      r="1.29337"
                      transform="rotate(-90 57.9433 46.5615)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="12.6751"
                      r="1.29337"
                      transform="rotate(-90 57.9443 12.6751)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 1.29337 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.29337"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 1.29337 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 12.6747 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="12.6747"
                      cy="1.2933"
                      r="1.29337"
                      transform="rotate(-90 12.6747 1.2933)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 24.0575 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="24.0575"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 24.0575 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="35.1798"
                      r="1.29337"
                      transform="rotate(-90 35.4379 35.1798)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="35.4379"
                      cy="1.29336"
                      r="1.29337"
                      transform="rotate(-90 35.4379 1.29336)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 46.8197 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="46.8197"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 46.8197 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 68.807 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="68.807"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 68.807 1.29354)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="35.18"
                      r="1.29337"
                      transform="rotate(-90 57.9443 35.18)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="57.9443"
                      cy="1.29354"
                      r="1.29337"
                      transform="rotate(-90 57.9443 1.29354)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
                <span class="absolute right-0 bottom-0">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                      stroke="#13C296"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">
                  Jackie Sanders
                </h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  Content Writer
                </p>
                <div class="flex items-center justify-center">
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="10"
                      height="18"
                      viewBox="0 0 10 18"
                      class="fill-current"
                    >
                      <path
                        d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="14"
                      viewBox="0 0 18 14"
                      class="fill-current"
                    >
                      <path
                        d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="
                      text-[#cdced6]
                      hover:text-primary
                      w-8
                      h-8
                      mx-2
                      flex
                      items-center
                      justify-center
                    "
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      class="fill-current"
                    >
                      <path
                        d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                      />
                      <path
                        d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                      />
                      <path
                        d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Team Section End -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="py-20 md:py-[120px] relative">
      <div
        class="
          absolute
          z-[-1]
          w-full
          h-1/2
          lg:h-[45%]
          xl:h-1/2
          bg-[#f3f4fe]
          top-0
          left-0
        "
      ></div>
      <div class="container px-4">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="px-4 w-full lg:w-7/12 xl:w-8/12">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span class="text-dark font-semibold text-base mb-5">
                  CONTACT US
                </span>
                <h2 class="text-[35px] font-semibold">
                  Let's talk about <br />
                  Love to hear from you!
                </h2>
              </div>
              <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                <div class="flex max-w-full w-[330px] mb-8">
                  <div class="text-[32px] text-primary mr-6">
                    <svg
                      width="29"
                      height="35"
                      viewBox="0 0 29 35"
                      class="fill-current"
                    >
                      <path
                        d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                      />
                      <path
                        d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5 class="text-lg font-semibold mb-6">Our Location</h5>
                    <p class="text-base text-body-color">
                      401 Broadway, 24th Floor, Orchard Cloud View, London
                    </p>
                  </div>
                </div>
                <div class="flex max-w-full w-[330px] mb-8">
                  <div class="text-[32px] text-primary mr-6">
                    <svg
                      width="34"
                      height="25"
                      viewBox="0 0 34 25"
                      class="fill-current"
                    >
                      <path
                        d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5 class="text-lg font-semibold mb-6">How Can We Help?</h5>
                    <p class="text-base text-body-color">info@yourdomain.com</p>
                    <p class="text-base text-body-color">
                      contact@yourdomain.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 w-full lg:w-5/12 xl:w-4/12">
            <div
              class="
                shadow-testimonial
                rounded-lg
                bg-white
                py-10
                px-8
                md:p-[60px]
                lg:p-10
                2xl:p-[60px]
                sm:py-12 sm:px-10
                lg:py-12 lg:px-10
                wow
                fadeInUp
              "
              data-wow-delay=".2s
              "
            >
              <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
                Send us a Message
              </h3>
              <form>
                <div class="mb-6">
                  <label for="fullName" class="block text-xs text-dark"
                    >Full Name*</label
                  >
                  <input
                    type="text"
                    name="fullName"
                    placeholder="Adam Gelius"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    "
                  />
                </div>
                <div class="mb-6">
                  <label for="email" class="block text-xs text-dark"
                    >Email*</label
                  >
                  <input
                    type="email"
                    name="email"
                    placeholder="example@yourmail.com"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    "
                  />
                </div>
                <div class="mb-6">
                  <label for="phone" class="block text-xs text-dark"
                    >Phone*</label
                  >
                  <input
                    type="text"
                    name="phone"
                    placeholder="+885 1254 5211 552"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    "
                  />
                </div>
                <div class="mb-6">
                  <label for="message" class="block text-xs text-dark"
                    >Message*</label
                  >
                  <textarea
                    name="message"
                    rows="1"
                    placeholder="type your message here"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                      resize-none
                    "
                  ></textarea>
                </div>
                <div class="mb-0">
                  <button
                    type="submit"
                    class="
                      inline-flex
                      items-center
                      justify-center
                      py-4
                      px-6
                      rounded
                      text-white
                      bg-primary
                      text-base
                      font-medium
                      hover:bg-dark
                      transition
                      duration-300
                      ease-in-out
                    "
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->
    @endsection

    <!-- ====== All Scripts -->

    @section('custom-script')
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
    @endsection

