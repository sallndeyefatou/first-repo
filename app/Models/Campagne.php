<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Agent;
use App\Models\Questionnaire;

class Campagne extends Model
{
    use HasFactory;

    protected $table='campagnes';

    protected $fillable = [
        'code',
        'name',
        'typecampagne',
        'namecourt',  
    ];

    public function agents()
    {
      return $this->belongsToMany(Agent::class, 'agents_questionnaires')->withPivot('agent_id','questionnaire_id','campagne_id','duree','semaine','annee');
    }  


    public function Questionnaires()
    {
      return $this->belongsToMany(Questionnaire::class, 'agents_questionnaires')->withPivot('agent_id','questionnaire_id','campagne_id','duree','semaine','annee');
    }   

}
