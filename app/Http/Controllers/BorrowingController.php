<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with('book', 'student')->get();  // Ambil data peminjaman buku
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $books = Book::all();  // Ambil semua data buku
        $students = Student::all();  // Ambil semua data siswa
        return view('borrowings.create', compact('books', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'student_id' => 'required|exists:students,id',
            'borrowed_at' => 'required|date',
            'due_date' => 'required|date|after:borrowed_at',
        ]);

        Borrowing::create($request->all());  // Simpan data peminjaman buku
        return redirect()->route('borrowings.index');
    }

    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();  // Hapus data peminjaman
        return redirect()->route('borrowings.index');
    }
}
