<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envoie extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($envoie) {
            try {
                //code...
                $bideur = Bideur::where('user_id', $envoie->user_id)->first();

                switch ($envoie->bid_statut_id) {
                    case '1':
                        $bideur->increment('balance', $envoie->number);
                        break;
                    case '2':
                        $bideur->increment('nontransferable', $envoie->number);
                        break;
                    case '3':
                        $bideur->increment('bonus', $envoie->number);
                        break;
                    default:
                        dd('erreur');
                        // Faire quelque chose si bid_statut ne correspond à aucun des cas précédents
                        break;
                }
            } catch (\Throwable $th) {
                //throw $th;
                dd($th);
            }
        });
    }

    // Relation avec l'utilisateur admin
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    // Relation avec l'utilisateur normal
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bidtype()
    {
        return $this->belongsTo(BidStatut::class, 'bid_statut_id');
    }
}