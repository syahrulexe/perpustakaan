<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();  // Ambil semua data buku
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');  // Tampilkan form tambah buku
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
        ]);

        Book::create($request->all());  // Simpan data buku baru
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));  // Tampilkan form edit buku
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
        ]);

        $book->update($request->all());  // Perbarui data buku
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();  // Hapus data buku
        return redirect()->route('books.index');
    }
}
