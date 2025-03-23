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
                                @if(isset($vehicles) && count($vehicles) > 0)
                                @foreach ( $vehicles as $index => $vehicle)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-800">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('storage/' . $vehicle['image']) }}" class="w-16 h-16 object-cover rounded-md">
                                    </td>
                                    <td class="px-6 py-4 text-gray-900 font-semibold">{{ $vehicle['brand'] }}</td>
                                    <td class="px-6 py-4 text-gray-500">{{ $vehicle['color'] }}</td>
                                    <td class="px-6 py-4 text-gray-800 font-bold">Rp.{{ $vehicle['price'] }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td class="px-6 py-4 text-gray-800" colspan="4">No data available</td>
                                </tr>
                                @endif                           
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
                                @if(isset($users) && count($users) > 0)
                                @foreach ($users as $index => $user)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-800">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 text-gray-900 font-semibold">{{ $user->name }}</td>
                                    <td class="px-6 py-4 text-gray-500">{{ $user->email }}</td>
                                    <td class="px-6 py-4 text-gray-800 font-bold">{{ $user->role }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td class="px-6 py-4 text-gray-800" colspan="3">No data available</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-layout_admin>