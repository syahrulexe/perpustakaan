<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Relasi ke Borrowing
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
