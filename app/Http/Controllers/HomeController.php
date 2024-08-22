<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Questionnaire;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        //session(['evaluationchoisie' => $evalSelected]);
        $evaluationchoisie=Session::get('evaluationchoisie');
        $campagne=Session::get('campagne');
        session(['DateDebut' => date('Y-m-d H:i:s')]);

        //session(['campagne' => $request->campagne])

        //dd($evaluationchoisie);

        $title="";
        $description="";
        $consigne="";
        $Nbrequestions ="";
        $Typereponse ="";
        $duree="";
        $evalchecked="";
        $evalchecked=$evaluationchoisie;
        //dd($evaluationchoisie);

        $campagnechoisie=Session::get('campagne');
        if(!empty($campagnechoisie) && isset($campagnechoisie) && $evalchecked='EvalMensuelle')
        {
         $questionnaires=Questionnaire::select('id','que_quizz')->where('que_op',$campagnechoisie)->orderBy('id','desc')->get();
         //dd($questionnaires);
        }
        //dd($campagnechoisie);
        //dd($questionnaires);



        switch ($evaluationchoisie) {
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
            case "EvalStagiaire":
                    $title="EVALUATIONS PAR LE STAGIAIRE";
                    $description="Bienvenue à l'évaluation de la formation par le stagiaire !";
                    $Nbrequestions ="18";
                    $Typereponse ="choix unique";
                    $duree="1 heure";   
                break;                 
            case "EvalMensuelle":
                    $title="EVALUATION MENSUELLE";
                    $description="Bienvenue à l'évaluation mensuelle !";
                    $Nbrequestions ="20";
                    $Typereponse ="choix unique";
                    $duree="1 heure";
                break; 
            case "Administrations":
                    $title="ADMINISTRATION QUIZZ";
                    $description="Bienvenue à l'administration quizz !";
                    $Nbrequestions ="20";
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
            'evalchecked'=>$evalchecked,
            'campagne'=>(!empty($campagne) && isset($campagne))?$campagne:'',
            'questionnaires'=>(!empty($questionnaires) && isset($questionnaires))?$questionnaires:'',
        ]);


        //return view('home');
    }
}
