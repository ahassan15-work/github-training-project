<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description', 'category_id', 'cover_image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
