<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NotificationController extends Controller
{
    public function create()
    {
        return view('send-sms-notification');
    }
    public function sendSmsNotification()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("d7f57e51", "AWmvkbRF0Lu7w1nf");
        $client = new \Vonage\Client($basic);
        $code = "3456";
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("40740557220", 'Schema', $code)
        );

        $message = $response->current();
        ///dd($message,$response);
        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }
        return view('2falogin');
    }

    public function store()
    {
        //dd(request());
        $attributes = request()->validate([
            'code'=>'required|min:4'
        ]);
        if($attributes['code']=="3456")
        {
            $attributes=['email'=>'oficialandreicroitoriu@yahoo.com','password'=>'CartofiCruzi112'];
            if(auth()->attempt($attributes))
            {
                return redirect('/')->with('success','Welcome back');
            }
            return back()->withInput()->withErrors(['code'=>'Your provided credentials could not be verified.']);
        }
        return back()->withInput()->withErrors(['code'=>'Your provided credentials could not be verified.']);
    }
}
