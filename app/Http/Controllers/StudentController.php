<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();  // Ambil semua data siswa
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');  // Tampilkan form tambah siswa
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:students',
        ]);

        Student::create($request->all());  // Simpan data siswa baru
        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));  // Tampilkan form edit siswa
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:students,nis,' . $student->id,
        ]);

        $student->update($request->all());  // Perbarui data siswa
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();  // Hapus data siswa
        return redirect()->route('students.index');
    }
}
