<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddNewColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('identifiant')->unique();
            $table->string('login');
            $table->string('agent');
            $table->string('prenom');
            $table->string('nom');
            $table->string('evaluation');
            $table->string('campagne');
            $table->integer('statut')->default(0);
            $table->foreignId('accesslevel_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_add_new_columns_to_users');
    }
}
