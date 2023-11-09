<?php

namespace App\Http\Controllers;

use App\Models\Create;
use App\Models\Stamp;
use App\Models\Intermission;
use Illuminate\Http\Request;

class StampingController extends Controller
{
    public function store(Request $request)
    {
        $stamp = $request->only(['started_at', 'ended_at']);
    }
}
