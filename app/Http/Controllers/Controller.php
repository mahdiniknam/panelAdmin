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
     public function index() {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    // public function create(){
    //     return view('create');
    // }
    // public function store(Request $request){
    //     $request->validate(
    //         [
    //             'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8'
    //         ]
    //         );
    //         User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => bcrypt($request->password)
    //         ]);
    //         return redirect()->route('users')->with('success','successfuly...');
    // }
//     public function index()
//     {
//         $users = User::all();
//         return view('users', compact('users'));
//     }

}   
