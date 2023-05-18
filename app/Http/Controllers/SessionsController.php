<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InvoicePaid;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]);

        if(auth()->attempt($attributes))
        {
            Notification::send(auth(), new InvoicePaid(123));
            return redirect('/')->with('success','Welcome back');
        }

        return back()->withInput()->withErrors(['email'=>'Your provided credentials could not be verified.']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success','Goodbye!');
    }
}
