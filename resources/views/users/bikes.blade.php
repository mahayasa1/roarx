<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="relative px-6 pt-14 lg:px-8">
      <div class="lg:py-50">
        <div class="text-center">
          <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl"></h1>
          <p class="text-pretty text-lg font-medium text-gray-600 sm:text-xl/8">Welcome to our pre-owned motorcycle page! We offer a wide selection of high-quality used motorcycles at affordable prices to meet your needs. Each motorcycle in our collection has undergone thorough inspections to ensure top performance and safety. Whether you're looking for a daily ride or a sporty model, you can find your dream motorcycle here without compromising on quality. With budget-friendly prices, we are here to help you find the perfect bike that fits your lifestyle. Discover your next motorcycle with us and enjoy the ride with confidence!</p>
        </div>
      </div>
  </div>

<div class="px-6 pt-14 lg:px-8">
  <div class="lg:py-0">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <h2 class="text-2xl font-bold text-gray-900">Trend Purchased</h2>
      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="group relative border p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="{{ asset('asset/img/sportbike.png')  }}" alt="Front of men&#039;s N-MAX White" class="w-full h-48 object-cover rounded-md">
          <div class="mt-4">
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  HONDA
                </h3>
                <p class="mt-1 text-sm text-gray-500">White</p>
                <p class="text-sm font-medium text-gray-800">$3.500</p>
              </a>
            </div>
          </div>
          <div class="group relative border p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('asset/img/sportbike.png') }}" alt="Front of men&#039;s HONDA red and white." class="w-full h-48 object-cover rounded-md">
            <div class="mt-4">
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  HONDA
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Red White</p>
              <p class="text-sm font-medium text-gray-800">$1.500</p>
            </div>
          </div>
        <div class="group relative border p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="{{ asset('asset/img/sportbike.png') }}" alt="Front of men&#039;s BMW blue." class="w-full h-48 object-cover rounded-md">
          <div class="mt-4">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#"> 
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  HONDA
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Red</p>
              <p class="text-sm font-medium text-gray-800">$9.000</p>
            </div>
          </div>
        </div>
      </div>
        
        <!-- More products... -->
      </div>
    </div>
  </div>
</div>
  </x-layout>