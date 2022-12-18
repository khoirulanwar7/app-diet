<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
  
  <section class="pt-20">
    <div class="container mx-auto flex justify-center">
      <div class="h-full w-full mx-5 flex flex-wrap justify-center">
        <div class="w-full flex flex-wrap justify-center mb-8">
          <h1 class="w-full text-center mb-3 text-3xl font-extrabold text-blue-900 ">
            KAVICHA
          </h1>
          <h2 class="text-xl md:text-2xl lg:text-3xl font-bold">
            Sign in to your account
          </h2>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mx-4">
          <form action="{{ route('aksi_login') }}" class="" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3 md:mb-6">
              <label for="" class="block mb-2 text-base font-semibold text-gray-700">
                username
              </label>
              <input type="text"
                class="border outline-none bg-gray-100 border-gray-300 w-full rounded-md h-11 focus:ring-1 focus:ring-slate-400 focus:border-slate-400 shadow-md"
                name="username">
            </div>
            <div class="mb-3 md:mb-6">
              <label for="" class="block mb-2 text-base font-semibold text-gray-700">
                Password
              </label>
              <input type="password"
                class="border outline-none bg-gray-100 border-gray-300 w-full rounded-md h-11 focus:ring-1 focus:ring-slate-400 focus:border-slate-400 shadow-md"
                name="password">
            </div>
            <div class="mt-10">
              <button class="py-2.5 w-full shadow-md bg-blue-900 hover:bg-blue-800 hover:shadow-xl rounded-lg text-white font-semibold">
                SIGN IN
              </button>
            </div>
          </form>
          <div class="flex justify-between mt-9 px-2">
            <a href="/register" class="text-blue-800 hover:underline">Sign up?</a>
            <a href="" class="text-blue-800 hover:underline">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>