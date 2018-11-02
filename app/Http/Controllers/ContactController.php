<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;

class ContactController extends Controller
{



	public function get()
	{
		$presentation= DB::select('SELECT * FROM presentation'); 
		$horaire= DB::select('SELECT * FROM horaire'); 
		$logo= DB::select('SELECT * FROM logo'); 
    
		return view('contact', 
		
		[
			'presentation' => $presentation,
			'horaire' => $horaire,
			'logo' => $logo,

		]); 	}


    public function add(Request $r)
    {

    	// Saving user message

		$contact = new contact;
		$contact->type = $r->input('type');
		$contact->nom = $r->input('nom');
		$contact->mail = $r->input('mail');
		$contact->message = $r->input('message');
		if( ! $contact->save() )
		{
			return $contact->last_error;
		}

		// Sending a mail to the admin


		//mail();
    }
}
