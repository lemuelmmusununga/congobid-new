<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_comptes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->length(11);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('id_updated_at')->nullable();
            $table->integer('id_deleted_at')->nullable();
            $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types_comptes');
    }
}
