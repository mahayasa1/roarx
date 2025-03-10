<nav class="bg-gray-800 shadow-lg" x-data="{ isOpen: false, dropdownOpen: false, profileDropdown: false }" style="margin-top: 0%;">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8" style="margin: 0;">
    <div class="flex h-16 items-center justify-between gap-x-4"> <!-- Menggunakan flexbox -->
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <img class="h-9 w-9" src="{{ asset('asset/img/logo.png') }}" alt="logo">
        </div>
        <div class="hidden md:flex flex-grow justify-center">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/index" :active="request()->is('/index')">HOME</x-nav-link>
            <!-- Dropdown for Kendaraan -->
            <div x-data="{ dropdownOpen: false }" class="relative">
              <button
                @click="dropdownOpen = !dropdownOpen"
                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md">
                KENDARAAN
              </button>
              <div
                x-show="dropdownOpen"
                @click.away="dropdownOpen = false"
                x-transition
                class="absolute left-0 z-10 mt-2 w-40 bg-white rounded-lg shadow-lg overflow-hidden"
                x-cloak>
                <x-nav-link href="/bike" :active="request()->is('/bikes')" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Bike</x-nav-link>
                <x-nav-link href="/car" :active="request()->is('/cars')" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Cars</x-nav-link>
              </div>
            </div>
            <x-nav-link href="/about" :active="request()->is('/about')">ABOUT</x-nav-link>
          </div>
        </div>
      </div>
      
      <!-- Search Bar & Profile Dropdown in a Flexbox -->
      <div class="flex items-center gap-x-4"> <!-- Flex container untuk search dan profile -->
        <!-- Search Bar Section -->
        <div class="flex items-center bg-gray-700 rounded-lg">
          <input
            type="search"
            name="search"
            id="search"
            placeholder="search"
            class="flex-grow max-w-xs border-none bg-transparent px-2 py-1 text-white placeholder-white outline-none"
          />
          <button class="ml-1 rounded bg-sky-700 px-3 py-2 text-white hover:bg-sky-600">
            <img class="h-5 w-5" src="{{ asset('asset/img/search-interface-symbol.png') }}" alt="">
          </button>
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
  </div>
</nav>
