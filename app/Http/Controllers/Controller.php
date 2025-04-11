<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{

    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        return view('userCreate');
    }
    public function store(Request $request)
    {
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]
        );
        return redirect()->route('users')
            ->with('Add successfuly...');
    }
}
