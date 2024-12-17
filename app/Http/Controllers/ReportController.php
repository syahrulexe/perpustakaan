<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;
use App\Models\Student;

class ReportController extends Controller
{
    public function reportBorrowings()
    {
        $data = Borrowing::with('book', 'student')->get();
        return view('reports.borrowings', compact('data'));
    }

    public function reportStudents()
    {
        $data = Student::all();
        return view('reports.students', compact('data'));
    }
}

