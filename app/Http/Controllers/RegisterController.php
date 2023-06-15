<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        //var_dump(request()->all());
        //create the user
        $attributes = request()->validate([
            'name' =>'required|max:255',
            'username'=>'required|max:255|min:3|unique:users,username',
            'phone'=>'required|min:7',
            //'username' => ['required','min:3','max:255',Rule::unique('users','username')],
            'email'=>'required|email|max:255|unique:users,email',   //no asdasd@asd.com
            'password'=>'required|min:7|max:255'
        ]);

        $user=User::create($attributes);

        // log the user in
        auth()->login($user);

        return redirect('/')->with('success','Your account has been created.');
    }
}
