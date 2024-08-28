<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Campagne;
use App\Models\Questionnaire;

class Agent extends Model
{
    use HasFactory;

    protected $table='agents';

    protected $fillable = [
        'identifiant',
        'nom',
        'prenom',
        'fonction',
        'accesslevel_id',
    ];

    public function campagnes()
    {
      return $this->belongsToMany(Campagne::class, 'agents_questionnaires')->withPivot('agent_id','questionnaire_id','campagne_id','duree','semaine','annee');
    }

    public function Questionnaires()
    {
      return $this->belongsToMany(Questionnaire::class, 'agents_questionnaires')->withPivot('agent_id','questionnaire_id','campagne_id','duree','semaine','annee');
    }

}
