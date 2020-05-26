<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('referance');
            $table->string('qte');
            $table->integer('prix-achat');
            $table->integer('prix-vent');
            $table->string('image');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('fournisseur_id');
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
        Schema::dropIfExists('produits');
    }
}
