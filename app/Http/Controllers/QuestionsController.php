<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizz1;
use App\Models\Reponse;
use App\Models\Questions;

class QuestionsController extends Controller
{

    public function show($quizz1_id)
        {
        $quizz = Quizz1::find($quizz1_id);
        return view('admin.quizz.show')->with(['quizz'=>$quizz]);
        }



        public function addquestion(Request $request, $quizz1_id)
        {

            $quizz = Quizz1::findOrFail($quizz1_id);
            //nombre de questions déja ajoutées
            $questionsCount = $quizz->questions->count();

            //nombre de questions restantes
            $questions_restantes = $quizz->nbques - $questionsCount;


           /* $validated = $request->validate([
                'intitule' => 'required|string|max:255',
                'type' => 'required|in:choix_multiple,choix_unique,reponse_ouverte',
                'reponses' => 'required_if:type,choix_multiple,choix_unique|array|min:2',
                'reponses.*' => 'required_if:type,choix_multiple,choix_unique|string|max:255',
                'bonne_reponse' => 'required_if:type,choix_unique|in:'.implode(',', array_keys($request->reponses))
            ]);*/
    
            try {
                $question = Questions::create([
                    'quizz1_id' => $quizz1_id,
                    'intitule' => $request->intitule,
                    'type' => $request->type,
                ]);
    
                if (in_array($request->type, ['choix_multiple', 'choix_unique'])) {
                    foreach ($request->reponses as $key => $reponse_text) {
                        $reponse = Reponse::create([
                            'question_id' => $question->id,
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
