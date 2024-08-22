<?php

use App\Http\Controllers\AdminPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListEvalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EvalSelectedController;
use App\Http\Controllers\StagiaireController;

use App\Http\Controllers\TestAmabiliteController;
use App\Http\Controllers\TestCapaciteEcouteController;
use App\Http\Controllers\TestDisponibiliteController;
use App\Http\Controllers\TestEmpathieController;
use App\Http\Controllers\TestStressController;
use App\Http\Controllers\MensuelleController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\Quizz1Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Quizz1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/app',function(){
   return view('auth.layouts.app');
});


/****************Admin Qizz****************/
/*Route::get('/quizz-accueil',function(){

   //$quizzs = Quizz1::all();
   return view('admin.quizz.index'/*,compact('quizzs'));
})->name('quizz-list');*/



/****************Fin admin Quizz****************/


Route::get('/master',function(){
   return view('layouts.master');
});

Route::get('/masterold',function(){
   return view('layouts.masterold');
});

Route::get('/masterOldOld',function(){
   return view('layouts.masterOldOld');
});

Route::get('/masterOldOldOld',function(){
   return view('layouts.masterOldOldOld');
});

Route::get('/masterOldOldOldOld',function(){
   return view('layouts.masterOldOldOldOld');
});

/*
Route::get('/login',function(){
   
   $evalSelected='EvalStagiaire';
   
   return view('auth.login')->with([
      'evalSelected'=>$evalSelected,
   ]);
})->name('login');
*/

/*
Route::get('/login',function(){  
   return view('auth.login');
})->name('login');
*/


Route::get('/register',function(){
   return view('auth.register');
})->name('register');

Route::get('/home',function(){
   return view('home');
})->name('home');

Route::get('/accueil',function(){
   return view('accueil');
})->name('accueil');

Route::get('/test',function(){
   return view('test');
})->name('test');


/*
Route::get('/start',function(){
   
 $title="EVALUATIONS PAR LE STAGIAIRE";
 $description="Bienvenue à l'évaluation de la formation par le stagiaire !";
 $Nbrequestions ="18";
 $Typereponse ="choix unique";
 $duree="1 heure"; 

   return view('start')->with([
            'title'=>$title,
            'description'=>$description,
            'Nbrequestions'=>$Nbrequestions,
            'Typereponse'=>$Typereponse,
            'duree'=>$duree,
        ]);
})->name('start');
*/


Route::get('/eval',function(){
   return view('evaluations.EvalParStagiaire');
})->name('EvalParStagiaire');

Route::get('/amabilite',function(){
   return view('evaluations.amabilite');
})->name('amabilite');

Route::get('/capaciteecoute',function(){
   return view('evaluations.capaciteEcoute');
})->name('capaciteecoute');

Route::get('/disponibilite',function(){
   return view('evaluations.disponibilite');
})->name('disponibilite');

Route::get('/empathie',function(){
   return view('evaluations.empathie');
})->name('empathie');


Route::get('/stress',function(){
   return view('evaluations.stress');
})->name('stress');

Route::get('/francais',function(){
   return view('evaluations.francais');
})->name('francais');
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home');
});

Route::post('/list', [App\Http\Controllers\ListEvalController::class, 'index'])->name('list');

Route::post('/loginToevalSelected', [App\Http\Controllers\ListEvalController::class, 'evalSelected'])->name('evalSelected');

Route::get('/loginevalSelectedTo/{evalSelectedTo}', [App\Http\Controllers\ListEvalController::class, 'evalSelectedTo'])->name('evalSelectedTo');

Route::resource('users',UserController::class);

Route::post('/evaluation', [App\Http\Controllers\EvalSelectedController::class, 'index'])->name('evaluation');


//Auth::routes();

Route::get('/start', [App\Http\Controllers\HomeController::class, 'index'])->name('start');

Route::resource('EvalStagiaires',App\Http\Controllers\StagiaireController::class);
Route::resource('TestAmabilites',App\Http\Controllers\TestAmabiliteController::class);
Route::resource('TestCapaciteEcoutes',App\Http\Controllers\TestCapaciteEcouteController::class);
Route::resource('TestDisponibilites',App\Http\Controllers\TestDisponibiliteController::class);
Route::resource('TestEmpathies',App\Http\Controllers\TestEmpathieController::class);
Route::resource('TestStress',App\Http\Controllers\TestStressController::class);

Route::resource('EvalMensuelles',App\Http\Controllers\MensuelleController::class);
Route::get('/evaluation/{evaluation}/evaluation', [App\Http\Controllers\MensuelleController::class, 'loadEval'])->name('evaluation.evaluation');


Route::get('deconnexion', [LoginController::class,'logout'])->name('deconnexion');


//Routes utilisateurs//


Route::get('addUser',[UserController::class,'create'])->name('addUser');

Route::post('store',[UserController::class,'store'])->name('users.store');

Route::get('listUser',[UserController::class,'index'])->name('listUser');

//Route::post('/users/{id}',[UserController::class,'destroy'])->name('user.destroy');

Route::get('edit',[UserController::class,'edit'])->name('editUser');

Route::get('editUser', function () {
   return view('users.edit');
})->name('editUser');



Route::get('/quizz-add',function(){
   return view('admin.quizz.add');
})->name('quizz-add');

Route::post('store',[Quizz1Controller::class,'store'])->name('quizz.store');

Route::get('quizz-accueil',[Quizz1Controller::class,'index'])->name('quizz-list');

Route::get('create',[Quizz1Controller::class,'create'])->name('quizz.create');

Route::post('quizz',[Quizz1Controller::class,'destroy'])->name('quizz.destroy');

Route::get('edit',[Quizz1Controller::class,'edit'])->name('quizz.edit');

Route::get('show/{quizz1_id}',[Quizz1Controller::class,'show'])->name('quizz.show');

Route::get('/quizz-add-question',function(){
   return view('admin.quizz.questions.add');
})->name('quizz-question-add');



Route::get('/quizz-add-question/{quizz1_id}',[Quizz1Controller::class,'addquestion'])->name('quizz-add-question');

//Route::resource('quizzs',QuestionsController::class);

Route::get('/Visualisation',function(){
   return view('admin.quizz.questions.show');
})->name('showQuizz');


/*Route::get('/',function(){
   $quizzs = Quizz1::all();
   return view('admin.quizz.index',compact('quizzs'));

})->name('quizz-index');*/


Route::get('admin',[loginAdminController::class,'index'])->name('admin.index');

Route::post('admin',[loginAdminController::class,'isAdmin'])->name('login.admin');


