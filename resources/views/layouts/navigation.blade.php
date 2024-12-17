<!-- resources/views/layouts/navigation.blade.php -->
<nav class="bg-gray-800 p-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo / Brand -->
        <div class="text-white text-xl font-semibold">
            <a href="{{ route('dashboard') }}">Library System</a>
        </div>

        <!-- Menu Horizontal dengan Background -->
        <div class="flex space-x-6 bg-gray-700 p-2 rounded-lg shadow-lg">
            <!-- Authentication Links -->
            @auth
                <a href="{{ route('profile.edit') }}" class="g-blue-600 text-white px-2 py-2 rounded hover:bg-red-700 transition-colors duration-200">Profil</a>
                
                <a href="{{ route('books.index') }}" class="g-blue-600 text-white px-2 py-2 rounded hover:bg-red-700 transition-colors duration-200">Buku</a>
                <a href="{{ route('students.index') }}" class="g-blue-600 text-white px-2 py-2 rounded hover:bg-red-700 transition-colors duration-200">Siswa</a>
                <a href="{{ route('borrowings.index') }}" class="g-blue-600 text-white px-2 py-2 rounded hover:bg-red-700 transition-colors duration-200">Peminjaman</a>
                <a href="{{ route('returnings.index') }}" class="g-blue-600 text-white px-2 py-2 rounded hover:bg-red-700 transition-colors duration-200">Pengembalian</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <!-- Tombol Logout dengan background merah dan teks putih -->
                    <button type="submit" class="bg-red-600 text-white px-2 py-2 rounded hover:bg-red-700 transition-colors duration-200">
                        Logout
                    </button>
                </form>
                
            @else
                <a href="{{ route('login') }}" class="hover:text-gray-300 px-4 py-2 rounded-md transition-colors duration-200">Login</a>
                <a href="{{ route('register') }}" class="hover:text-gray-300 px-4 py-2 rounded-md transition-colors duration-200">Register</a>
            @endauth
        </div>
    </div>
</nav>
