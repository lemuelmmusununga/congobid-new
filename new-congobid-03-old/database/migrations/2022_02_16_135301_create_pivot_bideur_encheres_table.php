<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotBideurEncheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_bideur_encheres', function (Blueprint $table) {
            $table->id();
            $table->integer('valeur')->default(0);
            $table->integer('roi')->default(0);
            $table->integer('foudre')->default(0);
            $table->integer('bouclier')->default(0);
            $table->integer('favoris')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('id_updated_at')->nullable();
            $table->integer('id_deleted_at')->nullable();
            $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('enchere_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_bideur_encheres');
    }
}
