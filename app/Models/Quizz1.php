<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Questions;

class Quizz1 extends Model
{
 
    use HasFactory;

    protected $table='evaluations.quizz1';

    protected $fillable=[
        'nomcampagne','nomquizz','nbques','duree','etat'
    ];


    public function questions(){
        return $this->hasMany(Questions::class);
    }
}

