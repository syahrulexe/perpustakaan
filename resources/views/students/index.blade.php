{{-- resources/views/students/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="bg-primary text-white px-4 py-4 rounded text-center mb-4">
        <h1>Data Siswa</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Siswa</a>
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>
                            {{-- <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a> --}}
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white  rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
