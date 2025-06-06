<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpirationDate extends Model
{
    protected $fillable = ['expiration_date', 'qty'];

    protected $dates = ['expiration_date'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
