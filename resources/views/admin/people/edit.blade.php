<x-layout_admin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-6 pt-16 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 py-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Edit Data People</h2>

            <form action="{{ route('people.update', $people) }}" method="POST" class="space-y-4 border border-gray-300 rounded-lg p-6 bg-white">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $people->name) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                
                <div> 
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $people->email) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                    <select name="role" id="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        <option value="admin" {{ $people->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $people->role == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout_admin>
