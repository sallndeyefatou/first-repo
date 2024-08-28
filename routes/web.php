<?php

use App\Http\Controllers\connexionController;
use App\Http\Controllers\contactcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inscriptionController;
use App\Http\Controllers\moncompteController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\ouvriersDataController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\editprofileController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',[welcomeController::class,'index'])->name('welcome');

Route::get('/connexion', [connexionController::class,'index'])->name('connexion');

Route::get('/inscription', [inscriptionController::class, 'index'])->name('inscription');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/connexion', [ouvriersDataController::class, 'showLoginForm'])->name('connexion');
Route::post('/connexion', [ouvriersDataController::class, 'login'])->name('login');
Route::get('/inscription', [ouvriersDataController::class, 'showRegistrationForm'])->name('inscription');
Route::post('/inscription', [ouvriersDataController::class, 'register']);
Route::post('/logout', [ouvriersDataController::class, 'logout'])->name('logout');




Route::get('/moncompte',function(){
    return view ('moncompte');
})->name('moncompte');

Route::get('/moncompte',[moncompteController::class,'index'])->name('moncompte');

Route::get('/contacts',[contactcontroller::class,'contacts'])->name('contacts');
Route::post('/contacts',[contactcontroller::class,'sendContacts'])->name('sendContacts');

Route::get('/recherche',[RechercheController::class,'showRechercheForm'])->name('recherche.form');

Route::post('/recherche',[RechercheController::class,'recherche'])->name('recherche');





Route::get('/editprofile',[editprofileController::class,'showEditProfile'])->name('editprofile');

Route::post('/editprofile',[editprofileController::class,'updateUser'])->name('updateUser');



Route::middleware(['auth'])->group(function () {

    
    Route::post('/updateUser', [editprofileController::class, 'updateUser'])->name('updateUser');
   
});



