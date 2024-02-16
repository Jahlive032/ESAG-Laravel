<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index() {
        return view('index')->with ('nom', 'Raph');
    }

    public function chaine() {
        return view('chaine.index') ->with('longueur', 0);
    }

    public function calcChaine(Request $request) {
        $longueur = strlen($request -> nom);
            return view('chaine.index') ->with('longueur',$longueur);
    }

    public function multiplication(){
        $result = [];
        return view('multiplication.index', ['result' => $result]);

        

    }

    public function generateTable(Request $request){
        $number = $request->input('number');
        $result = [];

        for($i=0; $i<=10; $i++){
            $result[] = "$number X $i = " . ($number * $i);
        }
        return view('multiplication.index', ['result' => $result]);
    }
}
