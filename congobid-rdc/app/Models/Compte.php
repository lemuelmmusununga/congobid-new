<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Compte extends Model
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

    public function typescompte()
    {
        return $this->belongsTo(TypesCompte::class);
    }
}
