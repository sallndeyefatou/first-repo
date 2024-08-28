<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    protected $table='evaluations.reponses';

    protected $fillable=[
        'question_id',
        'reponse',
        'is_correct'
    ];


    public function questions(){
        return $this->belongsTo(Questions::class);
    }
}
