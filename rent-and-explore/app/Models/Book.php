<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }
}
