<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Creat;
use App\Models\Stamp;
use App\Models\Intermission;

class RecordedController extends Controller
{
    public function index()
    {
        $stamps = Stamp::all();
        return view('record', ['stamps' => $stamps]);
    }

    public function recorddata(Request $request)
    {
        $sort = $request->sort;
        $order = $request->order;

        $stamps = Stamp::with(['user:id,name','user.intermission:started_at,ended_at'])->orderBy('id', 'asc')->pagenate(5);

        return view('record', [
            'record' => $record,
        ]);
    }
}
