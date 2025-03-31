<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600" x-data="{ isOpen: false, dropdownOpen: false, profileDropdown: false }" style="margin-top: 0%;">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <div class="flex-shrink-0">
        <img class="h-14 w-14" src="{{ asset('asset/img/logo.png') }}" alt="logo">
      </div>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <div class="flex items-center gap-x-4"> <!-- Flex container untuk search dan profile -->
      <!-- Search Bar Section -->
      <div class="flex items-center bg-gray-700 rounded-lg">   
        <form class="max-w-md mx-auto"action="{{ url()->current() }}" method="GET">   
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
              <input type="search" name="query" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mr-4" placeholder="Search..." required value="{{ request('query') }}" />
              <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 text-gray-100 dark:text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
          </button>
          </div>
        </form>
      </div>

      <!-- Profile Dropdown -->
      <div class="relative" x-data="{ profileDropdown: false }">
        <button
          @click="profileDropdown = !profileDropdown"
          class="flex items-center space-x-1 text-white hover:bg-gray-700 px-3 py-2 rounded-lg">
          <img class="h-8 w-8 rounded-full" src="{{ asset('asset/img/profile-picture.png') }}" alt="Profile Icon">
          <span>Profile</span>
        </button>
        <div
          x-show="profileDropdown"
          @click.away="profileDropdown = false"
          x-transition
          class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg overflow-hidden"
          x-cloak>
          <a href="/profile" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </div>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <x-nav-link class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page" href="/indexs" :active="request()->is('/indexs')">HOME</x-nav-link>
      </li>
      <li>
        <div x-data="{ dropdownOpen: false }" class="relative">
          <button
            @click="dropdownOpen = !dropdownOpen"
            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            KENDARAAN
          </button>
          <div
            x-show="dropdownOpen"
            @click.away="dropdownOpen = false"
            x-transition
            class="absolute left-0 z-10 mt-2 w-40 bg-white rounded-lg shadow-lg overflow-hidden"
            x-cloak>
            <x-nav-link href="/bikes" :active="request()->is('/bikes')" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Bike</x-nav-link>
            <x-nav-link href="/cars" :active="request()->is('/cars')" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Cars</x-nav-link>
          </div>
        </div>
      </li>
      <li>
        <x-nav-link class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" href="/people" :active="request()->is('/people')">USERS</x-nav-link>
      </li>
    </ul>
  </div>
  </div>
</nav>
