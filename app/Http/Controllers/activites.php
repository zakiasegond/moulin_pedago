<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class activites extends Controller
{



    //  public function getP()
    // {
    //     $presentation= DB::select('SELECT * FROM presentation'); 
    //     $horaire= DB::select('SELECT * FROM horaire'); 
    //     $logo= DB::select('SELECT * FROM logo'); 
    
    //     return view('activites', 
        
    //     [
    //         'presentation' => $presentation,
    //         'horaire' => $horaire,
    //         'logo' => $logo,

    //     ]); 
    // }


//-----------------nom de la methode/fonction
  public function getActivites()
    {
        //variable de la table/ ---------nom de la table
        $activites= DB::select('SELECT * FROM activites');
        $informations= DB::select('SELECT * FROM informations');
        $horaire= DB::select('SELECT * FROM horaire'); 
        $logo= DB::select('SELECT * FROM logo'); 


//------------------nom de la page .blade
        return view('activites',
        [
//-----------nom de la table---nom de la variable
            'activites' => $activites,
            'informations' => $informations,
            'horaire' => $horaire,
            'logo' => $logo,

        ]);
    }

}
