{{-- resources/views/reports/students.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="bg-primary text-white px-4 py-4 rounded text-center mb-4">
        <h1>Laporan Data Siswa</h1>
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nis }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
