<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'items_name',
        'items_description',
        'category_id',
        'user_id',
    ];

    public $timestamps = false; // atau true kalau sudah tambahkan created_at dan updated_at

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Category
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
