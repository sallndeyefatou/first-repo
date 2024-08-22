<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table='evaluations.questions';

    protected $fillable=[
        'quizz1_id',
        'intitule',
        'type',
        'note'
    ];

    public function reponses(){
        return $this->hasMany(Reponse::class);
    }

    public function quizz(){
        return $this->belongsTo(Quizz1::class);
    }
}
