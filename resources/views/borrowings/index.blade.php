@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center m-5 p-5 rounded shadow-lg" style="background-color: #2c3e50; max-width: 900px;">
        <!-- Header Section -->
        <h1 class="text-white fw-bold text-center mb-4">Peminjaman Buku</h1>

        <!-- Button Tambah Peminjaman -->
        <div class="text-center mb-4">
            <a href="{{ route('borrowings.create') }}" class="btn btn-success btn-lg">
                <i class="bi bi-plus-lg"></i> Tambah Peminjaman
            </a>
        </div>

        <!-- Table Section -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-dark align-middle text-center">
                <thead class="table-light text-dark">
                    <tr>
                        <th>NO</th>
                        <th>Buku</th>
                        <th>Siswa</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($borrowings as $index => $borrowing)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $borrowing->book->title }}</td>
                            <td>{{ $borrowing->student->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($borrowing->borrowed_at)->format('d-m-Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($borrowing->due_date)->format('d-m-Y') }}</td>
                            <td>
                                {{-- <a href="{{ route('borrowings.edit', $borrowing->id) }}" class="btn btn-sm btn-warning">  Edit
                                </a> --}}
                                <form action="{{ route('borrowings.destroy', $borrowing->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" bg-red-600 text-white px-1 py-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-light">Belum ada data peminjaman buku.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
