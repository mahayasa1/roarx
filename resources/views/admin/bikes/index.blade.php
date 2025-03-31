<x-layout_admin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-6 pt-16 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 py-8">
            <h2 class="text-2xl font-bold text-gray-900">Bikes Management</h2>
            <div class="mt-4">
                <a href="{{ route('bikes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add New Bike</a>
            </div>
            <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">

                @if(request('query'))
                    <p class="text-gray-500">Showing results for: <strong>{{ request('query') }}</strong></p>
                @endif
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($bikes as $index => $bike)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-gray-800">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset($bike->image) }} " class="w-16 h-16 object-cover rounded-md">
                                </td>
                                <td class="px-6 py-4 text-gray-900 font-semibold">{{ $bike->brand }}</td>
                                <td class="px-6 py-4 text-gray-500">{{ $bike->color }}</td>
                                <td class="px-6 py-4 text-gray-800 font-bold">Rp.{{ number_format($bike->price, 0, ',', '.') }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('bikes.edit', $bike->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <form action="{{ route('bikes.destroy', $bike->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                {{ $bikes->links() }}
            </div>
            </div>
        </div>
    </div>
</x-layout_admin>