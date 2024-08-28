<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\AgentQuestionnaire;
use App\Models\Questionnaire;
use App\Models\Campagne;


class EvalSelectedController extends Controller
{

    public function index(Request $request)
    {
       //dd($request->all());


        //dd($request->title);
        //$title="";
        $description="";
        $consigne="";
        $Nbrequestions ="";
        $Typereponse ="";
        $duree="";

        $evaluation="";
        $campagnechoisie=Session::get('campagne');
        session(['DateDebut' => date('Y-m-d H:i:s')]);

        switch ($request->evalchecked) {
            case "TEST AMABILITE":
                    //$title="TESTEZ VOTRE AMABILITE";
                    //$description="Bienvenue au test amabilité !";
                    //$Nbrequestions ="10";
                    //$Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="amabilite";
                break;
            case "TEST CAPACITE DECOUTE":
                    // $title="TESTEZ VOTRE CAPACITE D’ECOUTE";
                    // $description="Bienvenue au test capacité d’écoute !";
                    // $Nbrequestions ="7";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="capaciteecoute";
                break;
            case "TEST DISPONIBILITE":
                    // $title="TESTEZ VOTRE DISPONIBILITE";
                    // $description="Bienvenue au test disponibilité !";
                    // $Nbrequestions ="20";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="disponibilite";
                break;
            case "TEST EMPATHIE":
                    // $title="TESTEZ VOTRE EMPATHIE";
                    // $description="Bienvenue au test empathie !";
                    // $Nbrequestions ="20";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="empathie";
                break;  
            case "TEST FRANCAIS CAPACITE REDACTIONNELLE":
                    // $title="TEST CAPACITE REDACTIONNELLE(ORTHOGRAPHE – GRAMMAIRE)";
                    // $description="Bienvenue au test capacité rédactionnelle !";
                    // $Nbrequestions ="40";
                    // $Typereponse =": choix unique & choix multiple";
                    $duree="3600";
                    $evaluation="francais";
                break;  
            case "TEST STRESS":
                    // $title="TESTEZ STRESS";
                    // $description="Bienvenue au test stress !";
                    // $Nbrequestions ="30";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="stress";
                break;  
            case "EvalStagiaire":
                    // $title="TESTEZ STRESS";
                    // $description="Bienvenue au test stress !";
                    // $Nbrequestions ="30";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="EvalParStagiaire";
                break; 
            case "EvalMensuelle":
                    // $title="TESTEZ STRESS";
                    // $description="Bienvenue au test stress !";
                    // $Nbrequestions ="30";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="mensuelles";
                break;                            
            default:
                    // $title="EVALUATIONS PAR LE STAGIAIRE";
                    // $description="Bienvenue à l'évaluation de la formation par le stagiaire !";
                    // $Nbrequestions ="18";
                    // $Typereponse ="choix unique";
                    $duree="3600";
                    $evaluation="amabilite";               
                break;
        }

        
        if($request->evalchecked=='EvalMensuelle')
        {
                    
                    $checkboxselected=$request->checkboxselected;
                    //dd($checkboxselected);


                    //$eval = Questionnaire::find(1);
                    //$eval=Questionnaire::where('id',$checkboxselected)->first();
                    //dd($eval);    
                    //dd($eval->agents);
                    //dd($eval->pivot->duree);

                      //  foreach ($eval->agents as $agent)
                      //  {
                      //      dd($agent->pivot->agent_id);
                      //  }                    

                    //$eval=AgEvalQuestionnaire::where('evaluation_questionnaire_id',$checkboxselected)->first();
                    //dd($eval);

                    ///$eval=Questionnaire::where('id',$checkboxselected)->first();
                    $camapagne=Campagne::where('namecourt',$campagnechoisie)->first();

                    $agentIsparametred=AgentQuestionnaire::where('questionnaire_id',$checkboxselected)->where('campagne_id',$camapagne->id)
                                         ->where('agent_id',$checkboxselected)
                                         ->latest()
                                         ->first();
                    //dd($agentIsparametred);


                    if(!empty($agentIsparametred))
                       {
                                    
                                    return redirect()->route('evaluation.evaluation',['evaluation'=>$checkboxselected])->with([
                                        'checkboxselected'=>$checkboxselected,
                                        //'duree'=>$duree,
                                        //'questionnaire'=>$questionnaire,
                                    ]);
                          }else{
                                    return back()->with('error','Vous avez deja repondu ou ete parametres.');
                          }          
        } else {   
                    return view('evaluations.'.$evaluation)->with([
                        // 'title'=>$title,
                        // 'description'=>$description,
                        // 'Nbrequestions'=>$Nbrequestions,
                        // 'Typereponse'=>$Typereponse,
                        'duree'=>$duree,
                    ]);
        }
    }

}
