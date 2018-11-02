<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Presentation extends Controller
{


   public function getPresentation()
	{
		$presentation= DB::select('SELECT * FROM presentation'); 
		$horaire= DB::select('SELECT * FROM horaire'); 
		$logo= DB::select('SELECT * FROM logo'); 
    
		return view('accueil', 
		
		[
			'presentation' => $presentation,
			'horaire' => $horaire,
			'logo' => $logo,

		]); 
	}
}
