<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Illuminate\Http\Request;

class quizzaccueilController extends Controller
{
    /*public function accueil(){
        return view('quizz-accueil');
    }
*/


    public function create(){

    }
    public function addquizz(Request $request){

        $validated= $request->validate([
            'nomcampagne' => 'required|string|max:255',
            'nomquizz' => 'required|string|max:255',
            'nbques' => 'required|Integer',
            'duree' => 'required|time',
            'etat' => 'required|string|max:255',
          

        ]);

        $newquizz= Quizz::create($validated
           /*'nomcampagne' => $request->nomcampagne,
            'nomquizz' => $request->nomquizz,
            'nbques' =>$request->nbques,
            'duree' => $request->duree,
            'etat' => $request->etat*/
       );

       return redirect()->route('quizz-list')->with('success','quizz ajouté avec succès');

        

       
    }
}
