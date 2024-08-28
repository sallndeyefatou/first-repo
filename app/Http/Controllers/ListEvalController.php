<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ListEvalController extends Controller
{
    public function index(Request $request)
    {
       //dd($request->customRadio);

        $title="";
        $description="";
        $consigne="";
        $Nbrequestions ="";
        $Typereponse ="";
        $duree="";



        switch ($request->customRadio) {
            case "TEST AMABILITE":
                    $title="TESTEZ VOTRE AMABILITE";
                    $description="Bienvenue au test amabilité !";
                    $Nbrequestions ="10";
                    $Typereponse ="choix unique";
                    $duree="1 heure";
                break;
            case "TEST CAPACITE DECOUTE":
                    $title="TESTEZ VOTRE CAPACITE D’ECOUTE";
                    $description="Bienvenue au test capacité d’écoute !";
                    $Nbrequestions ="7";
                    $Typereponse ="choix unique";
                    $duree="1 heure";
                break;
            case "TEST DISPONIBILITE":
                    $title="TESTEZ VOTRE DISPONIBILITE";
                    $description="Bienvenue au test disponibilité !";
                    $Nbrequestions ="20";
                    $Typereponse ="choix unique";
                    $duree="1 heure";
                break;
            case "TEST EMPATHIE":
                    $title="TESTEZ VOTRE EMPATHIE";
                    $description="Bienvenue au test empathie !";
                    $Nbrequestions ="20";
                    $Typereponse ="choix unique";
                    $duree="1 heure";
                break;  
            case "TEST FRANCAIS CAPACITE REDACTIONNELLE":
                    $title="TEST CAPACITE REDACTIONNELLE(ORTHOGRAPHE – GRAMMAIRE)";
                    $description="Bienvenue au test capacité rédactionnelle !";
                    $Nbrequestions ="40";
                    $Typereponse =": choix unique & choix multiple";
                    $duree="1 heure";
                break;  
            case "TEST STRESS":
                    $title="TESTEZ STRESS";
                    $description="Bienvenue au test stress !";
                    $Nbrequestions ="30";
                    $Typereponse ="choix unique";
                    $duree="1 heure";
                break;                                                                         
            default:
                    $title="EVALUATIONS PAR LE STAGIAIRE";
                    $description="Bienvenue à l'évaluation de la formation par le stagiaire !";
                    $Nbrequestions ="18";
                    $Typereponse ="choix unique";
                    $duree="1 heure";                
                break;
        }

        return view('start')->with([
            'title'=>$title,
            'description'=>$description,
            'Nbrequestions'=>$Nbrequestions,
            'Typereponse'=>$Typereponse,
            'duree'=>$duree,
        ]);
    }

    public function evalSelected(Request $request)
    {
       //dd($request->customRadio);


        $evalSelected='';
        session(['evaluationchoisie' => ""]);

        if($request->customRadio){
            $evalSelected=$request->customRadio;
            session(['evaluationchoisie' => $request->customRadio]);
        }else{
            $evalSelected='EvalStagiaire';
            session(['evaluationchoisie' => 'EvalStagiaire']);
        }

        return view('auth.login')->with([
            'evalSelected'=>$evalSelected,
        ]);
    }


    public function evalSelectedTo(Request $request)
    {
       //dd($request->evalSelectedTo);
        //dd($request->all());

        session(['evaluationchoisie' => ""]);
        $evalSelected='';
        $evalSelected=$request->evalSelectedTo;
        session(['evaluationchoisie' => $request->evalSelectedTo]);
/*
        if($request->customRadio){
            $evalSelected=$request->customRadio;
        }else{
            $evalSelected='EvalStagiaire';
        }
*/
        return view('auth.login')->with([
            'evalSelected'=>$evalSelected,
        ]);
    }

}
