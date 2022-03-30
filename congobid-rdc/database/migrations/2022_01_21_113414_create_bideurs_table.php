<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBideursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bideurs', function (Blueprint $table) {
            $table->id();
            $table->integer('balance')->default(0);
            $table->integer('nontransferable')->default(0);
            $table->integer('bonus')->default(0);
            $table->integer('roi')->default(0);
            $table->integer('foudre')->default(0);
            $table->integer('bouclier')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('id_updated_at')->nullable();
            $table->integer('id_deleted_at')->nullable();
            $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('paquet_id')->default(1)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('admin_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bideurs');
    }
}
