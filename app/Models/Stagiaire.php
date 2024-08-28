<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvalStagiaire extends Model
{
    use HasFactory;

    protected $table='stagiaires';

    protected $fillable=[
         'eval_datedeb',
         'eval_date',
         'eval_identifiant',
         'eval_nom',
         'eval_prenom',
         'eval_duree',
         'eval_agent',
         'eval_poste',
         'eval_ipposte',
         'eval_q1',
         'eval_q2',
         'eval_q3',
         'eval_q4',
         'eval_q5',
         'eval_q6',
         'eval_q7',
         'eval_q8',
         'eval_q9',
         'eval_q10',
         'eval_q11',
         'eval_q12',
         'eval_q13',
         'eval_q14',
         'eval_q15',
         'eval_q16',
         'eval_q17',
         'eval_q18',
         'eval_q19',
         'eval_q20',
         'eval_locked',
    ];    
}
