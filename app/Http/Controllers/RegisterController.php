<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes=request()->validate([
            'name'=>'required|max:255|min:5',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=>'required|email|max:255',
            'phone'=>'required|min:7',
            'password'=>'required|min:7|max:255'
        ]);
        //dd($attributes);
        $user=User::create(['name'=>$attributes["name"],'username'=>$attributes["username"],'email'=>$attributes["email"],'phone'=>$attributes["phone"],'password'=>$attributes["password"],'balance'=>0]);
        auth()->login($user);
        return redirect('/')->with('succes','Welcome, {{$attributes["name"]}}');
    }
}
