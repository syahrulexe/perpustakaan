<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returning extends Model
{
    use HasFactory;

    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class);
    }
}
