<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
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

    public function paquet()
    {
        return $this->belongsTo(Paquet::class,'paquet_id');
    }

    public function bideurs()
    {
        return $this->HasMany(Bideur::class);
    }

    public function articles()
    {
        return $this->HasMany(Article::class);
    }

    public function pivotbideurpaquet()
    {
        return $this->hasMany(PivotBideurPaquet::class);
    }

}
