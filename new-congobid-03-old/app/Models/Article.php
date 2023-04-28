<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;


    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $prix = $article->prix;
            function isInInterval($number, $interval)
            {
                [$min, $max] = explode('-', $interval);
                return $number >= $min && $number <= $max;
            }
            if (isInInterval($prix, '0-200')) {
                $article->paquet_id = 1;
            } elseif (isInInterval($prix, '201-500')) {
                $article->paquet_id = 2;
            } elseif (isInInterval($prix, '501-1500')) {
                $article->paquet_id = 3;
            } elseif (isInInterval($prix, '1501-2500')) {
                $article->paquet_id = 4;
            } elseif (isInInterval($prix, '2501-5000')) {
                $article->paquet_id = 5;
            } elseif (isInInterval($prix, '5001-1000')) {
                $article->paquet_id = 6;
            } else {
                $article->paquet_id = 0;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function enchere()
    {
        return $this->belongsTo(Enchere::class);
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class);
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