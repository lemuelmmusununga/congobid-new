<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gagnant extends Model
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

    public function enchere()
    {
        return $this->belongsTo(Enchere::class);
    }

    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }

}
