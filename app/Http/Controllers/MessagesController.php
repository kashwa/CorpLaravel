<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	//return $request -> input('name');		THIS IS BANNED! MUST BE validated 
    	$this->validate($request, [
    		'name' 		=>	'required',
    		'email'		=>	'required',
    		'message'	=>	'required'
    	]);

    	// Create a new Message.
    	// // ELOquent, a DB library, do more sql stmnts by it.
    	$message = new Message; 
    	
    	/**
    	 * Here i made some sql statement
    	 * i assigned the entered value of name,
    	 * which i get from the request object,
    	 * to the name variable of the message table in my Database!
    	 *
    	 * so nice !
    	 * @var [Eloquent Databases]
    	 */
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	// Save message
    	$message->save();

    	// Redirect
    	// return back to home page, after Saving Message to Database.
    	return Redirect('/')->with('success', 'Message Sent');

    }

    /**
     * [getMessages description]
     * 		Fetch messages and data from database,
     * 		and use it to print in the website.
     * 	by this @var <$messages> i will get all messages in it
     * 	
     * @return [view] [Pass(using WITH) all data i returned to this view]
     */
    public function getMessages(){
    	$messages = Message::all();
    	return view('messages')->with('messages', $messages);
    }
}


