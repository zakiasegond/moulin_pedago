<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Image extends Controller
{

	
    
   public function getImage()
	{
    	
		$image= DB::select('SELECT * FROM image'); 
		$logo= DB::select('SELECT * FROM logo');
		$horaire= DB::select('SELECT * FROM horaire'); 

		return view('galerie', 
		[
			'image' => $image,
			'logo' => $logo,
			'horaire' => $horaire,
		]); 
	}
}