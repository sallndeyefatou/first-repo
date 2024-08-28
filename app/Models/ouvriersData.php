<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Hash;

class ouvriersData extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = "ouvriers";

    protected $fillable = [
        'prenom','nom','tel','region','metier','email','password'];
}
 