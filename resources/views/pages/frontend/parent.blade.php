
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>LuxSpace</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/content/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('frontend/css/app.minify.css') }}" />
    <link rel="icon" href="{{ asset('frontend/images/content/favicon.png') }}" />

    <meta name="theme-color" content="#000" />
  <link rel="icon" href="favicon.ico"><link href="css/app.minify.css" rel="stylesheet"></head>

  <body>
    <!-- Add your site or application content here -->

    @include('pages.frontend.include.navbar')

    <!-- START: HERO -->
    <section class="flex items-center hero">
      <div
        class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption"
      >
        <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
          The Room <br class="" />You've Dreaming
        </h1>
        <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
          Kami menyediakan furniture berkelas yang
          <br class="hidden lg:block" />membuat ruangan terasa homey
        </h2>
        <div>
          <a
            href="#browse-the-room"
            class="bg-pink-400 text-black hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
            >Explore Now</a
          >
        </div>
      </div>
      <div class="w-full inset-0 md:relative md:w-1/2">
        <div class="relative hero-image">
          <div class="overlay inset-0 bg-black opacity-35 z-10"></div>
          <div class="overlay right-0 bottom-0 md:inset-0">
            <button
              class="video hero-cta focus:outline-none z-30 modal-trigger"
              data-content='<div class="w-screen pb-56 md:w-88 md:pb-56 relative z-50">
              <div class="absolute w-full h-full">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/3h0_v1cdUIA"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>
            </div>'
            ></button>
          </div>
          <img
            src="{{ asset('frontend/images/content/image-section-1.png') }}"
            alt="hero 1"
            class="absolute inset-0 md:relative w-full h-full object-cover object-center"
          />
        </div>
      </div>
    </section>
    <!-- END: HERO -->

    <!-- START: BROWSE THE ROOM -->
    <section class="flex bg-gray-100 py-16 px-4" id="browse-the-room">
      <div class="container mx-auto">
        <div class="flex flex-start mb-4">
          <h3 class="text-2xl capitalize font-semibold">
            browse the room <br class="" />that we designed for you
          </h3>
        </div>
        <div class="grid grid-rows-2 grid-cols-9 gap-4">
          <div
            class="relative col-span-9 row-span-1 md:col-span-4 card"
            style="height: 180px"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="{{ asset('frontend/images/content/image-catalog-1.png') }}"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
            >
              <h5 class="text-lg font-semibold">Living Room</h5>
              <span class="">18.309 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div
            class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="{{ asset('frontend/images/content/image-catalog-2.png') }}"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
            >
              <h5 class="text-lg font-semibold">Decoration</h5>
              <span class="">77.392 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div
            class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="{{ asset('frontend/images/content/image-catalog-3.png') }}"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
            >
              <h5 class="text-lg font-semibold">Living Room</h5>
              <span class="">22.094 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div class="relative col-span-9 row-span-1 md:col-span-4 card">
            <div class="card-shadow rounded-xl">
              <img
                src="{{ asset('frontend/images/content/image-catalog-4.png') }}"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
            >
              <h5 class="text-lg font-semibold">Children Room</h5>
              <span class="">837 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END: BROWSE THE ROOM -->

    @yield('content')

    <!-- START: CLIENTS -->
    <section class="container mx-auto">
      <div class="flex justify-center flex-wrap">
        <div
          class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0"
        >
          <img src="{{ asset('frontend/images/content/logo-adobe.svg') }}" alt="" class="mx-auto" />
        </div>
        <div
          class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0"
        >
          <img src="{{ asset('frontend/images/content/logo-adobe.svg') }}" alt="" class="mx-auto" />
        </div>
        <div
          class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0"
        >
          <img
            src="{{ asset('frontend/images/content/logo-adobe.svg') }}tent/logo-hermanmiller.svg"
            alt=""
            class="mx-auto"
          />
        </div>
        <div
          class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0"
        >
          <img src="{{ asset('frontend/images/content/logo-adobe.svg') }}" alt="" class="mx-auto" />
        </div>
      </div>
    </section>
    <!-- END: CLIENTS -->

    @include('pages.frontend.include.footer')

    <!-- START: LOAD SVG -->
    <!-- <svg width="23" height="26" class="hidden" id="icon-play">
      <path
        d="M21 9.536c2.667 1.54 2.667 5.39 0 6.928l-15 8.66c-2.667 1.54-6-.385-6-3.464V4.34C0 1.26 3.333-.664 6 .876l15 8.66z"
        fill="#fff"
      />
    </svg> -->
    <!-- END: LOAD SVG  -->

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("set", "anonymizeIp", true);
      ga("set", "transport", "beacon");
      ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script src="{{ asset('frontend/js/app.js') }}"></script></body>
</html>
