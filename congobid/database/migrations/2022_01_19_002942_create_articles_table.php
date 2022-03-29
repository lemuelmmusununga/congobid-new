<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->length(50);
            $table->string('marque')->length(50);
            $table->integer('promouvoir')->default(0);
            $table->string('code_produit')->length(25)->unique();
            $table->text('description');
            $table->integer('prix');
            $table->integer('prix_marche');
            $table->integer('prix_min');
            $table->integer('prix_max');
            $table->string('cout_livraison')->length(10)->nullable();
            $table->string('infos_livraison');
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('limite_enchere_auto')->length(3);
            $table->string('credit_enchere_auto')->length(10);
            $table->string('quantite')->length(10);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('id_updated_at')->nullable();
            $table->integer('id_deleted_at')->nullable();
            $table->foreignId('statut_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('articles');
    }
}
