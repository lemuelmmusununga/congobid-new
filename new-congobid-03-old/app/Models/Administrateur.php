<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Administrateur extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function statut(){
        return $this->belongsTo(Statut::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function admin(){
        return $this->belongsTo(User::class, 'administrateur_id');
    }

    public function gagnant()
    {
        return $this->hasMany(Gagnant::class);
    }

}
