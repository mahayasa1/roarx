<x-layout>
    <x-slot name="title">Dashboard</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Dashboard</h1>
                <p class="text-center">Welcome, {{ auth()->user()->name }}</p>
                <p class="text-center">Your email is: {{ auth()->user()->email }}</p>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>