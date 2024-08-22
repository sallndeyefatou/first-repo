<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestRecrutement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TestFrancaisController extends Controller
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
                                ->where('test_name', 'CAPACITE REDACTIONNELLE')
                                ->where('test_date', date('Y-m-d H:i:s'))
                                ->where('test_prenom', Auth::user()->prenom)
                                ->where('test_nom', Auth::user()->nom)
                                ->where('test_agent', Session::get('prenom'))
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
                    'test_name'=>'CAPACITE REDACTIONNELLE',
                    'test_datedeb'=>$datedebut,
                    'test_date'=>date('Y-m-d H:i:s'),
                    'test_identifiant'=>Auth::user()->identifiant,
                    'test_prenom'=>Auth::user()->prenom,
                    'test_nom'=>Auth::user()->nom,
                    'test_duree'=>$secondsDifference,
                    'test_agent'=>$prenom,
                    'test_poste'=>gethostname(),
                    'test_ipposte'=>getHostByName(getHostName()),                    
                    'test_q1'=>$request->Q1,
                    'test_q2'=>$request->Q2,
                    'test_q3'=>$request->Q3,
                    'test_q4'=>$request->Q4,
                    'test_q5'=>$request->Q5,
                    'test_q6'=>$request->Q6,
                    'test_q7'=>$request->Q7,
                    'test_q8'=>$request->Q8,
                    'test_q9'=>$request->Q9,
                    'test_q10'=>$request->Q10,
                    'test_q11'=>$request->Q11,
                    'test_q12'=>$request->Q12,
                    'test_q13'=>$request->Q13,
                    'test_q14'=>$request->Q14,
                    'test_q15'=>$request->Q15,
                    'test_q16'=>$request->Q16,
                    'test_q17'=>$request->Q17,
                    'test_q18'=>$request->Q18,
                    'test_q19'=>$request->Q19,
                    'test_q20'=>$request->Q20,
                    'test_q21'=>$request->Q21,
                    'test_q22'=>$request->Q22,
                    'test_q23'=>$request->Q23,
                    'test_q24'=>$request->Q24,
                    'test_q25'=>$request->Q25,
                    'test_q26'=>$request->Q26,
                    'test_q27'=>$request->Q27,
                    'test_q28'=>$request->Q28,
                    'test_q29'=>$request->Q29,
                    'test_q30'=>$request->Q30,
                    'test_q31'=>$request->Q31,
                    'test_q32'=>$request->Q32,
                    'test_q33'=>$request->Q33,
                    'test_q34'=>$request->Q34,
                    'test_q35'=>$request->Q35,
                    'test_q36'=>$request->Q36,
                    'test_q37'=>$request->Q37,
                    'test_q38'=>$request->Q38,
                    'test_q39'=>$request->Q39,
                    'test_q40'=>$request->Q40,
                    'test_locked'=>1,
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
