<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <!-- Profil Pengguna -->
        <div class="section">
            <h1>Profil Pengguna</h1>
            <div class="profile">
                <img class="w-24" src="{{ asset('asset/img/profile-picture.png') }}" alt="Profil Pengguna">
                <h4>Nama Pengguna</h4>
                <p>Email: <a href="" class="text-sky-700">
                    {{-- {{ auth()->user()->email }} --}}
                </a></p>
            </div>
        </div>
        <br>
        <!-- Ubah Profil -->
        <div class="section">
            <h1>Ubah Profil</h1>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-control">
                    <label for="name" class="label">Nama</label>
                    {{-- <input type="text" id="name" name="name" class="input" value="{{ auth()->user()->name }}" required> --}}
                </div>
                <div class="form-control">
                    <label for="email" class="label">Email</label>
                    {{-- <input type="email" id="email" name="email" class="input" value="{{ auth()->user()->email }}" required> --}}
                </div>
                <div class="form-control">
                    <label for="password" class="label">Password</label>
                    <input type="password" id="password" name="password" class="input" required>
                </div>
                <div class="form-control">
                    <label for="password_confirmation" class="label">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="input" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</x-layout>