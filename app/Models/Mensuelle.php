<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensuelle extends Model
{
    use HasFactory;

    protected $table='mensuelles';

    protected $fillable=[
        'rep_numeroquizz', 
        'quizz_id',
        'rep_date', 
        'rep_identifiant', 
        'rep_userid', 
        'rep_login', 
        'rep_nom', 
        'rep_prenom', 
        'rep_datedebut', 
        'rep_datefin', 
        'rep_duree', 
        'rep_poste',
        'rep_ipposte', 
        'rep_semaine', 
        'rep_annee', 
        'rep_campagne', 
        'rep_q1', 
        'rep_q2', 
        'rep_q3', 
        'rep_q4', 
        'rep_q5', 
        'rep_q6', 
        'rep_q7', 
        'rep_q8', 
        'rep_q9', 
        'rep_q10', 
        'rep_q11', 
        'rep_q12', 
        'rep_q13', 
        'rep_q14', 
        'rep_q15', 
        'rep_q16', 
        'rep_q17', 
        'rep_q18', 
        'rep_q19', 
        'rep_q20', 
        'rep_locked',
    ];

}
