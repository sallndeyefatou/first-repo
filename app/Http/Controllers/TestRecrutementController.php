<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestRecrutement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TestRecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    $recrutement = TestRecrutement::where('test_identifiant', Auth::user()->identifiant)
                                ->where('test_date', date('Y-m-d H:i:s'))
                                ->where('test_prenom', Auth::user()->prenom)
                                ->where('test_nom', Auth::user()->nom)
                                ->first();

    if(empty($recrutement))
       {
         //dd("Pas en base !");

        try {
            DB::beginTransaction();
                //dd($request->all());

               $prenom=Session::get('prenom');
               $datedebut=Session::get('DateDebut');
               $datefin=date('Y-m-d H:i:s');
               $secondsDifference=strtotime($datefin)-strtotime($datedebut);
               $secondsDifference=intval($secondsDifference/60);

                $create_recrutement=TestRecrutement::create([
                    'eval_datedeb'=>$datedebut,
                    'eval_date'=>date('Y-m-d H:i:s'),
                    'eval_identifiant'=>Auth::user()->identifiant,
                    'eval_prenom'=>Auth::user()->prenom,
                    'eval_nom'=>Auth::user()->nom,
                    'eval_duree'=>$secondsDifference,
                    'eval_agent'=>$prenom,
                    'eval_poste'=>gethostname(),
                    'eval_ipposte'=>getHostByName(getHostName()),                    
                    'eval_q1'=>$request->NoteQ1,
                    'eval_q2'=>$request->NoteQ2,
                    'eval_q3'=>$request->NoteQ3,
                    'eval_q4'=>$request->NoteQ4,
                    'eval_q5'=>$request->NoteQ5,
                    'eval_q6'=>$request->NoteQ6,
                    'eval_q7'=>$request->NoteQ7,
                    'eval_q8'=>$request->NoteQ8,
                    'eval_q9'=>$request->NoteQ9,
                    'eval_q10'=>$request->NoteQ10,
                    'eval_q11'=>$request->NoteQ11,
                    'eval_q12'=>$request->NoteQ12,
                    'eval_q13'=>$request->NoteQ13,
                    'eval_q14'=>$request->NoteQ14,
                    'eval_q15'=>$request->NoteQ15,
                    'eval_q16'=>$request->NoteQ16,
                    'eval_q17'=>$request->NoteQ17,
                    'eval_q18'=>$request->NoteQ18,
                    'eval_q19'=>$request->NoteQ19,
                    'eval_locked'=>1,
                ]);

                  if (!$create_recrutement) 
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
