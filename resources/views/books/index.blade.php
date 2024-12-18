@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="bg-primary text-white px-4 py-4 rounded text-center mb-4" style="width: 100%; max-width: 900px;">
        <h1>Daftar Buku</h1>
        <a href="{{ route('books.create') }}" class="btn btn-secondary mb-3">Tambah Buku</a>

        <!-- Tabel -->
        <div class="table-responsive">
            <table class="table table-dark table-bordered table-hover align-middle text-center">
                <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            {{-- <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger bg-red-600 text-white px-1 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
