<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Weeding</title>
    <link href="{{ asset('landing')}}/dist/css/final.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a href="#home" class="block py-6 text-lg font-bold text-primary">TheWedding</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
              <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>

            <nav
              id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Beranda</a>
                </li>
               
                <li class="group">
                  <a href="#portfolio" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Portfolio</a>
                </li>
                <li class="group">
                  <a href="#clients" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Template</a>
                </li>
                <li class="group">
                  <a href="#blog" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Harga</a>
                </li>
                
                <li class="mt-3 flex items-center pl-8 lg:mt-0">
                  <div class="flex">
                   
                    <a class="ml-2 text-sm text-slate-500" href="{{route('signout')}}"">Sig Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark pb-16">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4  lg:w-1/2">
           <h1 class="text-base font-semibold text-primary md:text-xl" >Hello Selamat Datang 🖐🏻🖐🏻</h1>
           <h1 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl">Platfrom Undangan <span class="text-primary">Digital</span></h1>
            <p class="mb-10 font-medium leading-relaxed text-secondary">Solusi Pernikahan lebih hemat dan praktis, dan kekinian dengan e-invitation yang disebar otomatis.bukan!</span></p>
            <a href="{{route("signin")}}" class="rounded-full bg-dark py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Login</a>
            <a href="{{route("signup")}}" class="rounded-full bg-dark py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Buat Sekarang</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img src="{{ asset('landing')}}/dist/img/elemen1.png" alt="Sandhika Galih" class="relative z-10 mx-auto max-w-full" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->
    <!-- Portfolio Section Start -->
    <section id="portfolio" class="bg-slate-800 pt-36 pb-16 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h1 class="mb-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">Kembangkan Bisnis Anda <span class="font-medium text-primary">#SekarangJuga</span></h1>
            <p class="text-md font-medium text-secondary md:text-lg">
              Lihat Bagaimana Kami bisa Mempermudah Pengembangan Bisnis Anda Dari Awal Sampai Akhir
            </p>
          </div>
        </div>
        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center">
            <a href="#" class="mx-4 max-w-[120px] py-4  transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
              <img src="{{ asset('landing')}}/dist/img/clients/BRI_2020.svg.png" alt="Google" />
            </a>
            <a href="#" class="mx-4 max-w-[120px] py-4   transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
              <img src="{{ asset('landing')}}/dist/img/clients/2560px-BNI_logo.svg.png" alt="Gojek" />
            </a>
            <a href="#" class="mx-4 max-w-[120px] py-4   transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
              <img src="{{ asset('landing')}}/dist/img/bca-removebg-preview.png" alt="Gojek" />
            </a>
            <a href="#" class="mx-4 max-w-[120px] py-4   transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
              <img src="{{ asset('landing')}}/dist/img/Logo_dana_blue.svg.webp" alt="Gojek" />
            </a>

          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Clients Section Start -->

    <!-- Clients Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="bg-slate-100 pt-36 pb-32 dark:bg-dark">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h1 class="mb-2 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Template Yang Kami Sediakan <span class="font-light	 text-primary">#TheWedding</span></h1>
            <p class="text-md font-medium text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quisquam perspiciatis blanditiis dolores?</p>
          </div>
        </div>

        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
              <img src="{{ asset('landing')}}/dist/img/wedding.png" alt="Programming" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Undangan Pernikahan Hanif dan Dzikron</a>
                </h3>
                <a href="#" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
              <img src="{{ asset('landing')}}/dist/img/wedding1.png" alt="Mechanical Keyboard" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Undangan Pernikahan Hanif dan Dzikron</a>
                </h3>
                <a href="#" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
              <img src="{{ asset('landing')}}/dist/img/wedding1.png" alt="Coffee" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Undangan Pernikahan Hanif dan Dzikron</a>
                </h3>
                <a href="#" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
              <img src="{{ asset('landing')}}/dist/img/wedding1.png" alt="Coffee" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Undangan Pernikahan Hanif dan Dzikron</a>
                </h3>
                <a href="#" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
              <img src="{{ asset('landing')}}/dist/img/wedding1.png" alt="Coffee" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Undangan Pernikahan Hanif dan Dzikron</a>
                </h3>
                <a href="#" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
              <img src="{{ asset('landing')}}/dist/img/wedding1.png" alt="Coffee" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Undangan Pernikahan Hanif dan Dzikron</a>
                </h3>
                <a href="#" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-2 text-lg font-semibold text-primary">Contact</h4>
            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
            <p class="text-md font-medium text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, sed.</p>
          </div>
        </div>

        <form>
          <div class="w-full lg:mx-auto lg:w-2/3">
            <div class="mb-8 w-full px-4">
              <label for="name" class="text-base font-bold text-primary">Nama</label>
              <input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
            </div>
            <div class="mb-8 w-full px-4">
              <label for="email" class="text-base font-bold text-primary">Email</label>
              <input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
            </div>
            <div class="mb-8 w-full px-4">
              <label for="message" class="text-base font-bold text-primary">Pesan</label>
              <textarea type="email" id="email" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
            </div>
            <div class="w-full px-4">
              <button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
            <h2 class="mb-5 text-4xl font-bold text-white">Undangan Digital</h2>
            <h3 class="mb-2 text-2xl font-bold">Hubungi Kami</h3>
            <p>HanifDzikron1@gmail.com</p>
            <p>Pt.Hanifdeveloper</p>
            <p>Pati Jawa Tengah</p>
          </div>
          <div class="mb-12 w-full px-4 md:w-1/3">
            <h3 class="mb-5 text-xl font-semibold text-white">Lebih Dekat</h3>
            <ul class="text-slate-300">
              <li>
                <a href="" class="mb-3 inline-block text-base hover:text-primary">Harga</a>
              </li>
              <li>
                <a href="" class="mb-3 inline-block text-base hover:text-primary">Layanan Prioritas</a>
              </li>
              <li>
                <a href="" class="mb-3 inline-block text-base hover:text-primary">Panduan Pengguna</a>
              </li>
              <li>
                <a href="" class="mb-3 inline-block text-base hover:text-primary">Kebijakan Provasi</a>
              </li>
              <li>
                <a href="" class="mb-3 inline-block text-base hover:text-primary">Syarat dan ketentuan</a>
              </li>
              <li>
                <a href="" class="mb-3 inline-block text-base hover:text-primary">Berkarir</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full border-t border-slate-700 pt-10">
          <div class="mb-5 flex items-center justify-center">
            <!-- Youtube -->
            <a
              href="https://youtube.com/webprogrammingunpas"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                />
              </svg>
            </a>

            <!-- Instagram -->
            <a
              href="https://instagram.com/sandhikagalih"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>

            <!-- Twitter -->
            <a
              href="https://twitter.com/sandhikagalih"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Twitter</title>
                <path
                  d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                />
              </svg>
            </a>

            <!-- TikTok -->
            <a
              href="https://tiktok.com/@sandhika.galih"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>TikTok</title>
                <path
                  d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                />
              </svg>
            </a>

            <!-- LinkedIn -->
            <a
              href="https://linkedin.com/in/sandhikagalih"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>LinkedIn</title>
                <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                />
              </svg>
            </a>
          </div>
          <p class="text-center text-xs font-medium text-slate-500">
            Copyright ©<span class="text-pink-500">Hanifdeveloper</a>
          </p>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
      <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to top End -->

    <script src="{{ asset('landing')}}/dist/js/script.js"></script>
  </body>
</html>