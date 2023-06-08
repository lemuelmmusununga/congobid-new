<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGagnantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gagnants', function (Blueprint $table) {
            $table->id();
            $table->string('lien');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('id_updated_at')->nullable();
            $table->integer('id_deleted_at')->nullable();
            $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('enchere_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('administrateur_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gagnants');
    }
}
