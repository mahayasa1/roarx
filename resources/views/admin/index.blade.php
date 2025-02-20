    <x-layout_admin>
        <x-slot:title>{{ $title }}</x-slot:title>
    
        <!-- Admin Dashboard Section -->
        <div class="px-6 pt-14 lg:px-8">
            <div class="lg:py-0">
                <!-- Admin Header -->
                <div class="mx-auto max-w-7xl px-4 py-8">
                    <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
                    <p class="text-gray-600 mt-2">Manage your vehicles and users efficiently.</p>
                </div>
    
                <!-- Vehicle Management Section -->
                <div class="mx-auto max-w-7xl px-4 py-8">
                    <h2 class="text-2xl font-bold text-gray-900">Vehicle Management</h2>
    
                    <!-- Vehicle List Table -->
                    <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Example Vehicle Row -->
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-800">1</td>
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('asset/img/sportbike.png') }}" class="w-16 h-16 object-cover rounded-md">
                                    </td>
                                    <td class="px-6 py-4 text-gray-900 font-semibold">HONDA</td>
                                    <td class="px-6 py-4 text-gray-500">White</td>
                                    <td class="px-6 py-4 text-gray-800 font-bold">$3,500</td>
                                    {{-- <td class="px-6 py-4">
                                        <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                                    </td> --}}
                                </tr>
                                <!-- Example Vehicle Row -->
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-800">2</td>
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('asset/img/car.png') }}" class="w-16 h-16 object-cover rounded-md">
                                    </td>
                                    <td class="px-6 py-4 text-gray-900 font-semibold">BMW</td>
                                    <td class="px-6 py-4 text-gray-500">Blue</td>
                                    <td class="px-6 py-4 text-gray-800 font-bold">$10,000</td>
                                    {{-- <td class="px-6 py-4">
                                        <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <!-- User Management Section -->
                <div class="mx-auto max-w-7xl px-4 py-8">
                    <h2 class="text-2xl font-bold text-gray-900">User Management</h2>
                    <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                    {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Example User Row -->
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-900 font-semibold">John Doe</td>
                                    <td class="px-6 py-4 text-gray-500">john.doe@example.com</td>
                                    <td class="px-6 py-4 text-gray-800 font-bold">Admin</td>
                                    {{-- <td class="px-6 py-4">
                                        <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-layout_admin>