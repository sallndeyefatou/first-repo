<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentQuestionnaire extends Model
{
    use HasFactory;
    
    protected $table='agents_questionnaires';

    protected $fillable =[
        'agent_id',
        'questionnaire_id',
        'camapagne_id',
        'duree',
        'semaine',
        'annee',
    ];   
}
