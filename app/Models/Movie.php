<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'poster',
        'showtimes',
        'tickets',
        'screening_until',
        'category_id',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
