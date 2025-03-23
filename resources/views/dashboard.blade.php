<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        @vite('resources/css/app.css')
        @vite('resources/css/style.css')
        <title>Dashboard</title>
    </head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white py-4 px-6 flex justify-between items-center">
        <div class="flex-shrink-0">
            <img class="h-14 w-14" src="{{ asset('asset/img/logo.png') }}" alt="logo">
          </div>
        <div class="flex items-center bg-gray-700 rounded-lg">   
            <form class="max-w-md mx-auto">   
              <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
              <div class="relative">
                  <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mr-4" placeholder="Search..." required />
                  <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 text-gray-100 dark:text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
              </button>
              </div>
            </form>
          </div>
    </nav>

    <div class="relative h-screen">
        <img src="{{ asset('asset/img/hero.jpg') }}" alt="Hero Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-white text-6xl font-bold">Find Your Dream Vehicle</h1>
            <p class="text-gray-300 mt-4 text-xl max-w-3xl">Buy and sell used vehicles easily, quickly, and securely with our trusted platform.</p>
            <a href="{{ route('login') }}" class="mt-6 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-4 px-8 rounded-lg shadow-lg transition">Explore Now</a>
        </div>
    </div>

</body>
</html>
