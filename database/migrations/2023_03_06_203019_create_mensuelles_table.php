<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensuellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensuelles', function (Blueprint $table) {
            $table->id();
            $table->integer('rep_numeroquizz')->default(0);
            //$table->foreignId('quizz_id')->constrained();
            $table->date('rep_date');
            $table->string('rep_identifiant',4);
            $table->string('rep_userid',4);
            $table->string('rep_login',100);
            $table->string('rep_nom',100);
            $table->string('rep_prenom',100);
            $table->string('rep_heuredebut',20);
            $table->string('rep_heurefin',20);
            $table->integer('rep_duree')->default(0);
            $table->string('rep_poste',100);
            $table->integer('rep_semaine')->default(0);
            $table->integer('rep_annee')->default(0);            
            $table->string('rep_campagne',100);
            $table->string('rep_q1',15);
            $table->string('rep_q2',15);
            $table->string('rep_q3',15);
            $table->string('rep_q4',15);
            $table->string('rep_q5',15);
            $table->string('rep_q6',15);
            $table->string('rep_q7',15);
            $table->string('rep_q8',15);
            $table->string('rep_q9',15);
            $table->string('rep_q10',15);
            $table->string('rep_q11',15);
            $table->string('rep_q12',15);
            $table->string('rep_q13',15);
            $table->string('rep_q14',15);
            $table->string('rep_q15',15);
            $table->string('rep_q16',15);
            $table->string('rep_q17',15);
            $table->string('rep_q18',15);
            $table->string('rep_q19',15);
            $table->string('rep_q20',15);
            $table->integer('rep_locked')->default(1);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensuelles');
    }
}
