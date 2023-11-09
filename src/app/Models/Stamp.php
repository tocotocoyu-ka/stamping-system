<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    use HasFactory;
}

class Create extends Model
{
    public function create()
    {
        return $this->belongsTo('App\Create');
    }

    public function intermission()
    {
        return $this->belongsTo('App\Intermission');
    }
}