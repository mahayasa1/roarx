<x-layout_admin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-6 pt-16 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 py-8">
                <h2 class="text-2xl font-bold text-gray-900">Bikes Management</h2>

                <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-gray-800">1</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('asset/img/sportbike.png') }}" class="w-16 h-16 object-cover rounded-md">
                                </td>
                                <td class="px-6 py-4 text-gray-900 font-semibold">HONDA</td>
                                <td class="px-6 py-4 text-gray-500">White</td>
                                <td class="px-6 py-4 text-gray-800 font-bold">$3,500</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-gray-800">2</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('asset/img/sportbike.png') }}" class="w-16 h-16 object-cover rounded-md">
                                </td>
                                <td class="px-6 py-4 text-gray-900 font-semibold">HONDA</td>
                                <td class="px-6 py-4 text-gray-500">White</td>
                                <td class="px-6 py-4 text-gray-800 font-bold">$3,500</td>
                            </tr>
                        </tbody>
                    </table>
    </div>


</x-layout-admin>