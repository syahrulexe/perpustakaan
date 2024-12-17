{{-- resources/views/reports/borrowings.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="bg-primary text-white px-4 py-4 rounded text-center mb-4">
        <h1>Laporan Peminjaman Buku</h1>
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Buku</th>
                    <th>Siswa</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Jatuh Tempo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $borrowing)
                    <tr>
                        <td>{{ $borrowing->book->title }}</td>
                        <td>{{ $borrowing->student->name }}</td>
                        <td>{{ $borrowing->borrowed_at->format('d-m-Y') }}</td>
                        <td>{{ $borrowing->due_date->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
