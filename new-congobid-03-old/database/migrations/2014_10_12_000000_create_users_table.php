<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable()->length(25);
            $table->string('username')->unique();
            $table->string('provider_id')->nullable();
            $table->string('telephone')->unique()->length(12);
            $table->string('sexe')->length(8)->nullable();
            $table->string('email')->nullable();
            $table->date('date_naissance')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
                $table->string('profile_photo_path', 2048)->nullable();
                $table->timestamps();
                $table->timestamp('deleted_at')->nullable();
                $table->integer('id_updated_at')->nullable();
                $table->integer('id_deleted_at')->nullable();
                $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
