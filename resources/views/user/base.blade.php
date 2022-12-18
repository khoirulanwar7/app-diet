<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KAVICHA</title>
    @vite('resources/css/app.css')
</head>
<body>
  
  <header class="top-0 left-0 z-10 flex items-center w-full bg-transparent absolute">
    <div class="container mx-auto">
      <div class="relative flex items-center justify-between">
        <div class="px-4 lg:px-12 flex items-center">
          <a href="#hero" class="block py-6 text-lg font-bold text-blue-800 lg:text-2xl md:text-xl">
            KAVICHA
          </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
            <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
            <span class="transition duration-300 ease-in-out hamburger-line"></span>
            <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 lg:shadow-none lg:rounded-none bg-blue-300  shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#hero" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-blue-800">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="#konten" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-blue-800">
                  Konten
                </a>
              </li>
              <li class="group">
                <div class="pt-2 pl-6 lg:px-0">
                <a href="" class=" py-2 px-3 bg-blue-800 text-white rounded-md font-semibold">Logout</a>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section id="hero" class="pt-32">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-blue-800 md:text-2xl mb-10">
            KAVICHA WEBSITE
            <span class="block text-3xl text-slate-800 font-bold mt-3 md:text-5xl">
              Kebiasaan Sehat Untuk Kehidupan Yang Lebih Baik
            </span>
          </h1>
          <a href="" class="bg-transparent border border-blue-800 hover:border-none text-blue-800 hover:bg-blue-800 py-2.5 px-4 rounded-xl hover:text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
            Lihat Konten
          </a>
        </div>
        <div class="self-center px-4 w-full lg:w-1/2">
          <div class="relative mt-10 lg:mt-7">
            <img class="max-w-full mx-auto" width="800" height="800" src="{{ url ('img/hero.png') }}">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="konten" class="pt-28 pb-14">
    <div class="container mx-auto lg:px-9">
      <div class="w-full px-4">
        <div class="max-w-xl mb-10">
          <h2 class="text-blue-800 text-3xl lg:text-4xl font-semibold mb-2">Konten Program Diet</h2>
          <p class="text-slate-500 mb-4">Lihat program diet sesuai kebutuhan anda</p>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
          <div class="bg-white rounded-xl overflow-hidden shadow-lg border mb-10">
            <div class="py-8 px-6">
              <h3>
                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary">
                  Konten 1
                </a>
              </h3>
              <p class="text-base font-medium text-secondary mb-6 ">
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eveniet placeat debitis vitae blanditiis, corporis molestiae fugiat in a aliquam
                eligendi.
              </p>
              <a href="#"
                class="font-medium text-sm text-blue-800 border border-blue-800 bg-transparent hover:shadow-lg hover:text-white hover:bg-blue-800 py-2 px-4 rounded-lg">
                Lihat Konten
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="bg-blue-900 pt-6 pb-4 px-10">
      <div class="text-center">
        <h1 class="text-white tracking-wide">Copyrigth&copy KAVICHA</h1>
      </div>
    </div>
  </footer>

  <script src="{{ url ('js/script.js') }}"></script>

</body>
</html>