<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
     use HasFactory;
    protected $fillable = ['title', 'slug', 'excerpt', 'category', 'doc_url', 'published_at'];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }
}