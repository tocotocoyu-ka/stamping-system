<?php

namespace App\Http\Controllers;

use App\Models\Create;
use App\Http\Requests\CreateRequest;

class CreatedUserController extends Controller
{
    public function create(CreateRequest $request)
    {
        $create = $request->only(['name', 'email', 'password']);
        return view('stamp', ['create' => $create]);
    }

    public function store(CreateRequest $request)
    {
        $create = $request->only(['name', 'email', 'password']);
        Create::create($create);
    }

}
