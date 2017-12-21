<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required'
    	]);

    	// Create New Message

    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	// save  Message

    	$message->save();

    	// Redirect

    	return redirect('/home')->with('success', 'Message Sent');
    }
}
