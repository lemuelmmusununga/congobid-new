<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidStatut extends Model
{
    use HasFactory;

    public function bid()
    {
        return $this->hasMany(Bid::class);
    }

    public function envoie()
    {
        return $this->hasMany(Envoie::class);
    }
}
