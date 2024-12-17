<?php

namespace App\Http\Controllers;

use App\Models\Returning;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class ReturningController extends Controller
{
    public function index()
    {
        $returnings = Returning::with('borrowing.book', 'borrowing.student')->get();  // Ambil data pengembalian buku
        return view('returnings.index', compact('returnings'));
    }

    public function create()
    {
        $borrowings = Borrowing::whereNull('returned_at')->get();  // Ambil peminjaman yang belum dikembalikan
        return view('returnings.create', compact('borrowings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'borrowing_id' => 'required|exists:borrowings,id',
            'returned_at' => 'required|date|before_or_equal:today',
        ]);

        $returning = Returning::create($request->all());
        $borrowing = $returning->borrowing;
        $borrowing->update(['returned_at' => $request->returned_at]);  // Tandai peminjaman sebagai dikembalikan
        return redirect()->route('returnings.index');
    }

    public function destroy(Returning $returning)
    {
        $returning->delete();  // Hapus data pengembalian
        return redirect()->route('returnings.index');
    }
}
