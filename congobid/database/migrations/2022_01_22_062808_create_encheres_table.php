<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encheres', function (Blueprint $table) {
            $table->id();
            $table->string('click')->length(10)->default(0);
            $table->string('favoris')->length(10)->default(0);
            $table->date('date_debut')->length(25)->nullable();
            $table->time('heure_debut')->length(25)->nullable();
            $table->integer('state')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('id_updated_at')->nullable();
            $table->integer('id_deleted_at')->nullable();
            $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('article_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('paquet_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encheres');
    }
}
