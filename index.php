<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
         <!-- Google Fonts - Onest -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Onest:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="font-[Onest]">
    <script src="components/header.js?v=<?= time() ?>"></script>
    <div id="header"></div>    
          <!-- Hero Section -->
           <section class="bg-white lg:grid lg:place-content-center">
              <div class="mx-auto w-screen max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
                  <div class="max-w-prose text-left">
                      <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                        Selamat Datang
                         <strong class="text-[#803c11]"> Dimsavoria! </strong>
                      </h1>

                      <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed">
                       Nikmati dimsum goreng dengan keju lumer,<br> Crispy Outside Tender Juicy Inside.
                     </p>

                  <div class="mt-4 flex gap-4 sm:mt-6">
                  <a class="inline-block rounded bg-[#eda351] px-5 py-3 font-medium text-white transition-colors hover:bg-[#803c11]" href="#product">
                  Selengkapnya
                    </a>
      </div>
    </div>
  </div>
</section>

      <!-- Landing Page -->
<section>
  <div class="mx-auto max-w-fit px-4 py-8 sm:px-6 lg:px-8">
      <img src="img/landing.png" class="rounded-xl" alt="our product">
    </div>
</section>

<br><br><br><br>

<!-- Product Card -->

<section id="product">
  <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 -mt-20">
    <header class="text-center">
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Our Product</h2>

      <p class="mx-auto mt-4 max-w-md text-gray-500">
        sum crunch hadir dengan kenikmatan yang extra!
        dimsum goreng dengan full daging serta keju yang lumer
      </p>
    </header>

    <ul class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img src="img/product1.png" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]">

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Dimsum
            </h3>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img src="img/product2.png" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]">

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Dimsum
            </h3>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img src="img/product3.png" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]">

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Dimsum
            </h3>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img src="img/product4.png" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]">

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Dimsum
            </h3>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- Review Section -->

<div class="max-w-7xl mx-auto">
<article class="rounded-xl bg-white border border-gray-100">
  <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-4">
    <!-- Grid 1 -->
  <div class="flex col-start-1 gap-4 p-4 sm:p-6 lg:p-8">
    <a href="#" class="block shrink-0">
      <img alt="" src="img/2.png" class="size-14 rounded-xl object-cover">
    </a>

    <div>
      <h3 class="font-medium sm:text-lg">
        <a href="#" class="hover:underline"> Review </a>
      </h3>

      <p class="line-clamp-2 text-sm text-gray-700">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, accusantium
        temporibus iure delectus ut totam natus nesciunt ex?
      </p>

      <div class="mt-2 sm:flex sm:items-center sm:gap-2">
        <p class="hidden sm:block sm:text-xs sm:text-gray-500">
          Posted by
          <a href="#" class="font-medium underline hover:text-gray-700"> John </a>
        </p>
      </div>
    </div>
  </div>
  <!-- Grid 2 -->
  <div class="flex col-start-2 gap-4 p-4 sm:p-6 lg:p-8">
    <a href="#" class="block shrink-0">
      <img alt="" src="img/2.png" class="size-14 rounded-xl object-cover">
    </a>

    <div>
      <h3 class="font-medium sm:text-lg">
        <a href="#" class="hover:underline"> Review </a>
      </h3>

      <p class="line-clamp-2 text-sm text-gray-700">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, accusantium
        temporibus iure delectus ut totam natus nesciunt ex?
      </p>

      <div class="mt-2 sm:flex sm:items-center sm:gap-2">
        <p class="hidden sm:block sm:text-xs sm:text-gray-500">
          Posted by
          <a href="#" class="font-medium underline hover:text-gray-700"> John </a>
        </p>
      </div>
    </div>
  </div>

  <!--  -->
<!-- Grid 3 -->
  <div class="flex col-start-3 gap-4 p-4 sm:p-6 lg:p-8">
    <a href="#" class="block shrink-0">
      <img alt="" src="img/2.png" class="size-14 rounded-xl object-cover">
    </a>

    <div>
      <h3 class="font-medium sm:text-lg">
        <a href="#" class="hover:underline"> Review </a>
      </h3>

      <p class="line-clamp-2 text-sm text-gray-700">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, accusantium
        temporibus iure delectus ut totam natus nesciunt ex?
      </p>

      <div class="mt-2 sm:flex sm:items-center sm:gap-2">
        <p class="hidden sm:block sm:text-xs sm:text-gray-500">
          Posted by
          <a href="#" class="font-medium underline hover:text-gray-700"> John </a>
        </p>
      </div>
    </div>
  </div>
  <!-- Grid 4 -->
<div class="flex col-start-4 gap-4 p-4 sm:p-6 lg:p-8">
    <a href="#" class="block shrink-0">
      <img alt="" src="img/2.png" class="size-14 rounded-xl object-cover">
    </a>

    <div>
      <h3 class="font-medium sm:text-lg">
        <a href="#" class="hover:underline"> Review </a>
      </h3>

      <p class="line-clamp-2 text-sm text-gray-700">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, accusantium
        temporibus iure delectus ut totam natus nesciunt ex?
      </p>

      <div class="mt-2 sm:flex sm:items-center sm:gap-2">
        <p class="hidden sm:block sm:text-xs sm:text-gray-500">
          Posted by
          <a href="#" class="font-medium underline hover:text-gray-700"> John </a>
        </p>
      </div>
    </div>
  </div>
  <!-- \ -->

  </div>
</article>
</div>


<div class="my-62"></div>


  </body>
</html>