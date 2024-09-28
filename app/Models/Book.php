<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'author', 'description', 'price', 'image', 'stock'
    ];

    public function scopeAvailable($query)
    {
        return $query->where('stock', 1);
    }
}
