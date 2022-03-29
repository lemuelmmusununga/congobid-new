<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Statut extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function administrateurs()
    {
        return $this->hasMany(Administrateur::class);
    }

    public function communiques()
    {
        return $this->hasMany(Communique::class);
    }

    public function gagnants()
    {
        return $this->hasMany(Gagnant::class);
    }

    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function encheres()
    {
        return $this->hasMany(Enchere::class);
    }

    public function pivotbideurenchere()
    {
        return $this->hasMany(PivotBideurEnchere::class);
    }

    public function pivotclientsalon()
    {
        return $this->hasMany(PivotClientsSalon::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function salons()
    {
        return $this->hasMany(Salon::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }

    public function typescoupons()
    {
        return $this->hasMany(TypesCoupon::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function foudres()
    {
        return $this->hasMany(Foudre::class);
    }

    public function rois()
    {
        return $this->hasMany(Roi::class);
    }

    public function sanctions()
    {
        return $this->hasMany(Sanction::class);
    }
}
