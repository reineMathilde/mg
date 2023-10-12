<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appel_entrants', function (Blueprint $table) {
            $table->id();
            $table->string('numeroEntrant');
            $table->string('civilite');
            $table->string('nameClient');
            $table->string('usernameClient');
            $table->string('contact');
            $table->string('whatsapp');
            $table->string('fonction');
            $table->string('entreprise');
            $table->string('activite');
            $table->string('email')->unique;
            $table->string('statutAppel');
            $table->string('dateRdv');
            $table->string('heureRdv');
            $table->string('plaquette');
            $table->string('dateRappel');
            $table->string('heureRappel');
            $table->string('commentaire');
            $table->timestamps('');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appel_entrants');
    }
};
