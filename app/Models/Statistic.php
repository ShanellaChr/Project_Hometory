<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = ['category_id', 'month_year', 'total_items'];

    protected $dates = ['month_year'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}