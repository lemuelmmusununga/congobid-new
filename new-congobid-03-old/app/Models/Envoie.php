<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envoie extends Model
{
    use HasFactory;

    // Relation avec l'utilisateur admin
    public function admin()
    {
        return $this->belongsTo(Administrateur::class);
    }

    // Relation avec l'utilisateur normal
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bidtype()
    {
        return $this->belongsTo(BidStatut::class);
    }
}
