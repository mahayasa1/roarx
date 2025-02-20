<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<!-- Full Page Hero Section -->
<div class="relative h-screen">
    <img src="{{ asset('asset/img/hero.jpg') }}" alt="Hero Image" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center">
        <h1 class="text-white text-6xl font-bold">Find Your Dream Vehicle</h1>
        <p class="text-gray-300 mt-4 text-xl max-w-3xl">Buy and sell used vehicles easily, quickly, and securely with our trusted platform.</p>
        <a href="#" class="mt-6 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-4 px-8 rounded-lg shadow-lg transition">Explore Now</a>
    </div>
</div>

<div class="px-6 pt-14 lg:px-8">
    <div class="lg:py-0">
        <!-- Featured Products -->
        <div class="mx-auto max-w-7xl px-4 py-16">
            <h2 class="text-2xl font-bold text-gray-900">Most Purchased</h2>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group relative border p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('asset/img/sportbike.png') }}" class="w-full h-48 object-cover rounded-md">
                    <div class="mt-4">
                        <a href="#">
                            <h3 class="text-gray-900 font-semibold">HONDA</h3>
                            <p class="text-gray-500">White</p>
                            <p class="text-gray-800 font-bold">$3,500</p>
                        </a>
                    </div>
                </div>
                <div class="group relative border p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('asset/img/car.png') }}" class="w-full h-48 object-cover rounded-md">
                    <div class="mt-4">
                        <a href="#">
                            <h3 class="text-gray-900 font-semibold">BMW</h3>
                            <p class="text-gray-500">Blue</p>
                            <p class="text-gray-800 font-bold">$10,000</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
