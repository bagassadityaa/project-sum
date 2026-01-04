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
                  <a class="inline-block rounded bg-[#eda351] px-5 py-3 font-medium text-white transition-colors hover:bg-[#803c11]" href="#">
                  Selengkapnya
                    </a>
      </div>
    </div>
  </div>
</section>


  </body>
</html>