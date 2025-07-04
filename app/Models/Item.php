<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'category_id', 'subcategory_id', 'location', 'note', 'expiration_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategories::class);
    }

    public function expirationDates()
    {
        return $this->hasMany(ExpirationDate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
