<x-layout_admin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-6 pt-16 lg:px-8">
        <div class="mx-auto max-w-2xl px-4 py-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Edit Cars</h2>
            @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <form action="{{ route('cars.update', $cars->id) }}" method="POST" class="space-y-4 border border-gray-300 rounded-lg p-6 bg-white" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Tampilkan gambar yang sudah ada -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Current Image</label>
                    <img src="{{ asset('storage/' . $cars->image) }}" class="w-32 h-32 object-cover rounded-md mt-2">
                </div>

                <!-- Input untuk upload gambar baru -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">New Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <p class="mt-2 text-sm text-gray-500">Upload a new image to replace the current one.</p>
                </div>

                <!-- Input untuk brand -->
                <div>
                    <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                    <input type="text" name="brand" id="brand" value="{{ $cars->brand }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>

                <!-- Input untuk color -->
                <div>
                    <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                    <input type="text" name="color" id="color" value="{{ $cars->color }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>

                <!-- Input untuk price -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" step="0.01" name="price" id="price" value="{{ $cars->price }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout_admin>