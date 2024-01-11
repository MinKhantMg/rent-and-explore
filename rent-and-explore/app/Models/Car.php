<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
