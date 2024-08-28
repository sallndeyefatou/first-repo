<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->date('eval_Datedeb');
            $table->date('eval_Date');            
            $table->string('eval_Identifiant');
            $table->string('eval_Nom');
            $table->string('eval_Prenom');
            $table->string('eval_Duree');
            $table->string('eval_Agent');
            $table->string('eval_Poste');
            $table->string('eval_IPPoste');
            $table->string('eval_Q1');
            $table->string('eval_Q2');
            $table->string('eval_Q3');
            $table->string('eval_Q4');
            $table->string('eval_Q5');
            $table->string('eval_Q6');
            $table->string('eval_Q7');
            $table->string('eval_Q8');
            $table->string('eval_Q9');
            $table->string('eval_Q10');
            $table->string('eval_Q11');
            $table->string('eval_Q12');
            $table->string('eval_Q13');
            $table->string('eval_Q14');
            $table->string('eval_Q15');
            $table->string('eval_Q16');
            $table->string('eval_Q17');
            $table->string('eval_Q18');
            $table->string('eval_Q19');
            $table->string('eval_Q20');
            $table->integer('eval_Locked')->default(0);               
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
        Schema::dropIfExists('stagiaires');
    }
}
