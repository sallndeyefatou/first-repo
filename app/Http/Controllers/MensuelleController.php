<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Questionnaire;
use App\Models\Mensuelle;

class MensuelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($id);
        //$campagnechoisie=Session::get('campagne');
        //$questionnaires=EvalQuestionnaire::where('que_op',$campagnechoisie);

        //return view('evaluations.mensuelles')->with([
            // 'title'=>$title,
            // 'description'=>$description,
            // 'Nbrequestions'=>$Nbrequestions,
            // 'Typereponse'=>$Typereponse,
            //'duree'=>$duree,
       // ]);

    }

    public function loadEval($id)
    {
        //dd($id);
        $campagnechoisie=Session::get('campagne');
        $questionnaire=Questionnaire::where('id',$id)->first();
        //dd($questionnaire);
        return view('evaluations.mensuelles')->with([
            // 'title'=>$title,
            // 'description'=>$description,
            // 'Nbrequestions'=>$Nbrequestions,
            // 'Typereponse'=>$Typereponse,
            //'duree'=>$duree,
            'questionnaire'=>$questionnaire,
            //'campagne'=>$questionnaire->que_op,
            //'semaine'=>$questionnaire->que_semaine,
            //'annee'=>$questionnaire->que_annee,
            //'duree'=>$questionnaire->que_duree,
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
/*
         $validated = $request->validate([
            'NoteQ1' => 'required',
            'NoteQ2' => 'required',
            'NoteQ3' => 'required',
            'NoteQ4' => 'required',
            'NoteQ5' => 'required',  
            'NoteQ6' => 'required',
            'NoteQ7' => 'required',
            'NoteQ8' => 'required',
            'NoteQ9' => 'required',
            'NoteQ10' => 'required',
            'NoteQ11' => 'required',  
            'NoteQ12' => 'required',
            'NoteQ13' => 'required',
            'NoteQ14' => 'required',
            'NoteQ15' => 'required',
            'NoteQ16' => 'required',
            'NoteQ17' => 'required',  
            'txtQ18' => 'required',   
            'txtQ19' => 'required',                            
        ]); 
*/
    $mensuelle = Mensuelle::where('rep_identifiant', Auth::user()->identifiant)
                                ->where('quizz_id', $request->quizz_id)
                                ->first();

    if(empty($mensuelle))
       {
         //dd("Pas en base !");

        try {
            DB::beginTransaction();
                //dd($request->all());

               //$prenom=Session::get('prenom');
               $datedebut=Session::get('DateDebut');
               $datefin=date('Y-m-d H:i:s');
               $secondsDifference=strtotime($datefin)-strtotime($datedebut);
               $secondsDifference=intval($secondsDifference/60);

                $create_mensuelle=Mensuelle::create([
                    'quizz_id'=>$request->quizz_id,
                    'rep_date'=>$datedebut,
                    'rep_datedebut'=>$datedebut,
                    'rep_datefin'=>date('Y-m-d H:i:s'),
                    'rep_identifiant'=>Auth::user()->identifiant,
                    'rep_prenom'=>Auth::user()->prenom,
                    'rep_nom'=>Auth::user()->nom,
                    'rep_duree'=>$secondsDifference,
                    'rep_semaine'=>$request->semaine,
                    'rep_annee'=>$request->annee,
                    'rep_campagne'=>$request->campagne,
                    'rep_poste'=>gethostname(),
                    'rep_ipposte'=>getHostByName(getHostName()),                    
                    'rep_q1'=>$request->Q1,
                    'rep_q2'=>$request->Q2,
                    'rep_q3'=>$request->Q3,
                    'rep_q4'=>$request->Q4,
                    'rep_q5'=>$request->Q5,
                    'rep_q6'=>$request->Q6,
                    'rep_q7'=>$request->Q7,
                    'rep_q8'=>$request->Q8,
                    'rep_q9'=>$request->Q9,
                    'rep_q10'=>$request->Q10,
                    'rep_q11'=>$request->Q11,
                    'rep_q12'=>$request->Q12,
                    'rep_q13'=>$request->Q13,
                    'rep_q14'=>$request->Q14,
                    'rep_q15'=>$request->Q15,
                    'rep_q16'=>$request->Q16,
                    'rep_q17'=>$request->Q17,
                    'rep_q18'=>$request->Q18,
                    'rep_q19'=>$request->Q19,
                    'rep_q20'=>$request->Q20,
                    'rep_locked'=>1,
                ]);

                  if (!$create_mensuelle) 
                {
                    DB::rollBack();
                    return back()->with('error','Erreur lors de l enregistrement des données');
                }
            DB::commit(); 
            return response()->json(['success' => 'Enregistrement effectué avec succès.']);
            //return redirect()->route('home')->with('success', 'Enregistrement effectué avec succès.');
         } catch (\Throwable $e) {
            DB::rollBack();
            throw $e; 
        }
      }
      else{
       // dd("identifiant existe en base !");
        return back()->with('error','Cet identifiant existe déjà en base !');
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
