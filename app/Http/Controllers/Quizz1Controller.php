<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request ;
use App\Models\Quizz1;
use App\Models\Reponse;
use PhpParser\Node\Stmt\Foreach_;



class Quizz1Controller extends Controller
{
    public function index(){

        $quizzs = Quizz1::where('etat','=','Actif')->get();
        //dd($quizzs);
        if ($quizzs === true || $quizzs === false) {
            // Gérer l'erreur ici si $quizzs n'est pas une collection d'objets
            return back()->with('error', 'Erreur lors de la récupération des quizz.');
        }

        return view('admin.quizz.index')->with(['quizzs'=>$quizzs]);
       

    }
   

    public function create(){
        return view('admin.quizz.add');
    }

     /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
*/
    public function store(Request $request){

       /* $validated= $request->validate([
            'nomcampagne'=>'required|string|max:255',
            'nomquizz'=>'required|string|max:255',
            'nbques'=>'required|Integer',
            'duree'=>'required|date_format:H:i',
            'etat'=>'required|string|max:255',
        ]);*/
        //dd('validation');
      $quizz = Quizz1::where('nomquizz', $request->nomquizz)->first();

        if (empty($quizz)) {
        try {
            $create_quizz = Quizz1::create([
                'nomcampagne'=>$request->nomcampagne,
                'nomquizz'=>$request->nomquizz,
                'nbques'=>$request->nbques,
                'duree'=>$request->duree,
                'etat'=>$request->etat

            ]);

            if ($create_quizz) {

                return redirect()->route('quizz-list')->with('success','Quizz enregistré avec succes');
              
            } else  
                return back()->with('error','erreur lors de l\'enregistrement des informations ');
            
            
        } catch (\Throwable $e) {
       
            throw $e;

        }
    }
    //nom de quizz existe déja en base
    else return back()->with('error','Un quizz du meme nom existe deja en base');
}

    
    public function edit($id){
        $quizz=Quizz1::find($id);

        if (!$quizz) {
            return back()->with('error','Quizz non trouvé');


        } else {
            return view('admin.quizz.edit')->with(["quizzs"=>$quizz]);
        }
    }
    

    public function destroy($id){

        try {
            $delete_quizz= Quizz1::find($id)->delete();

            if (empty($delete_quizz)) {
                return back()->with('error','Erreur lors de la suppression du quizz');} 
            else {
                return redirect()->route('quizz-list')->with('success','Quizz supprimé avec succes');
            }

        } catch (\Throwable $e) {
            throw $e;
        }
        }



        public function show($id)
        {
        $quizz = Quizz1::findOrFail($id);
        
        return view('admin.quizz.questions.show')->with(['quizz'=>$quizz]);
        
        //dd($quizz);
        }
        


        public function addquestion(Request $request, $quizz1_id)
        {
            //dd($request);
            $quizz = Quizz1::find($quizz1_id);
            //nombre de questions déja ajoutées
            /*dd($quizz);*/
            $questionsCount = $quizz->questions->count();
            //nombre de questions restantes
            $questions_restantes = $quizz->nbques - $questionsCount;
            $validated = $request->validate([
                'intitule' => 'required|string|max:255',
                'type' => 'required|in:choix_multiple,choix_unique,reponse_ouverte',
                'reponses' => 'required_if:type,choix_multiple,choix_unique|array|min:2',
                'reponses.*' => 'required_if:type,choix_multiple,choix_unique|string|max:255',
                'bonne_reponse' => 'required_if:type,choix_unique|in:'.implode(',', array_keys($request->reponses))
            ]);

            try {

                $question = Questions::create([
                    'quizz1_id' => $quizz->quizz_id,
                    'intitule' => $request->intitule,
                    'type' => $request->type,
                    'note' =>$request->note
                ]);
    
                if (in_array($request->type, ['choix_multiple', 'choix_unique'])) {
                    foreach ($request->reponses as $key => $reponse_text) {
                        $reponse = Reponse::create([
                            'questions_id' => $question->quizz1_id,
                            'reponse' => $reponse_text,
                            'is_correct' => ($request->type == 'choix_unique' && $key == $request->bonne_reponse),
                        ]);
                    }
                }
    
                return redirect()->route('quizz.show', $quizz1_id)->with('success', 'Question ajoutée avec succès.');
    
            } catch (\Throwable $e) {
          
                return back()->with('error', 'Erreur lors de l\'ajout de la question.')->withInput();
            }
        }
            
        }
    

