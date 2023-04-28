<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function enchere()
    {
        return $this->hasOne(Enchere::class);
    }

    public function salon()
    {
        return $this->hasOne(Salon::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function paquet()
    {
        return $this->belongsTo(Paquet::class);
    }

  
}
