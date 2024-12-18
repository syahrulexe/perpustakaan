{{-- resources/views/returnings/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="bg-primary text-white px-4 py-4 rounded text-center mb-4">
        <h1>Pengembalian Buku</h1>
        <a href="{{ route('returnings.create') }}" class="btn btn-primary">Tambah Pengembalian</a>
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Peminjaman Buku</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($returnings as $returning)
                    <tr>
                        <td>{{ $returning->borrowing->book->title }} oleh {{ $returning->borrowing->student->name }}</td>
                        <td>{{ $returning->borrowing->borrowed_at}}</td>
                        <td>
                            <form action="{{ route('returnings.destroy', $returning->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-1 py-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
