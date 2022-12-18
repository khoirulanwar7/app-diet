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
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="px-4 lg:px-12 flex items-center">
          <img src="" alt="" class="h-10 mr-3 sm:h-14">
          <a href="" class="block py-6 text-lg font-bold text-blue-800 lg:text-2xl md:text-xl">
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
                <a href="" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-blue-800">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-blue-800">
                  Konten
                </a>
              </li>
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section>
    
  </section>

  <section></section>

  {{--  <footer>
    <div class="bg-blue-900 py-5 px-10">
      <div>
        <h1></h1>
      </div>
    </div>
  </footer>  --}}

  <script src="{{ url ('js/script.js') }}"></script>

</body>
</html>