<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'started_at',
        'ended_at'
    ];
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