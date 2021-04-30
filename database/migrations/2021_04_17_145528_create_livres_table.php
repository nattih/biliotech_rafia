<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('auteur_id')->unsigned();
            $table->foreign('auteur_id')->references('id')->on('auteurs')->constrained()->onDelete('cascade');
            $table->bigInteger('paye_id')->unsigned();
            $table->foreign('paye_id')->references('id')->on('payes')->constrained()->onDelete('cascade');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->constrained()->onDelete('cascade');
            $table->bigInteger('annee_id')->unsigned();
            $table->foreign('annee_id')->references('id')->on('annees')->constrained()->onDelete('cascade');
            $table->string('titre');
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
        Schema::dropIfExists('livres');
    }
}
