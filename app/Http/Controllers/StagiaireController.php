<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StagiaireController extends Controller
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
    $stagiaire = Stagiaire::where('eval_Identifiant', Auth::user()->identifiant)
                                ->where('eval_Date', date('Y-m-d H:i:s'))
                                ->where('eval_Prenom', Auth::user()->prenom)
                                ->where('eval_Nom', Auth::user()->nom)
                                ->first();

    if(empty($stagiaire))
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

                $create_stagiaire=Stagiaire::create([
                    'eval_Datedeb'=>$datedebut,
                    'eval_Date'=>date('Y-m-d H:i:s'),
                    'eval_Identifiant'=>Auth::user()->identifiant,
                    'eval_Prenom'=>Auth::user()->prenom,
                    'eval_Nom'=>Auth::user()->nom,
                    'eval_Duree'=>$secondsDifference,
                    'eval_Agent'=>$prenom,
                    'eval_Poste'=>gethostname(),
                    'eval_IPPoste'=>getHostByName(getHostName()),                    
                    'eval_Q1'=>$request->NoteQ1,
                    'eval_Q2'=>$request->NoteQ2,
                    'eval_Q3'=>$request->NoteQ3,
                    'eval_Q4'=>$request->NoteQ4,
                    'eval_Q5'=>$request->NoteQ5,
                    'eval_Q6'=>$request->NoteQ6,
                    'eval_Q7'=>$request->NoteQ7,
                    'eval_Q8'=>$request->NoteQ8,
                    'eval_Q9'=>$request->NoteQ9,
                    'eval_Q10'=>$request->NoteQ10,
                    'eval_Q11'=>$request->NoteQ11,
                    'eval_Q12'=>$request->NoteQ12,
                    'eval_Q13'=>$request->NoteQ13,
                    'eval_Q14'=>$request->NoteQ14,
                    'eval_Q15'=>$request->NoteQ15,
                    'eval_Q16'=>$request->NoteQ16,
                    'eval_Q17'=>$request->NoteQ17,
                    'eval_Q18'=>$request->NoteQ18,
                    'eval_Q19'=>$request->NoteQ19,
                    'eval_Locked'=>1,
                ]);

                  if (!$create_stagiaire) 
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
