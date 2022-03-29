<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    use HasFactory;
    

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

}
