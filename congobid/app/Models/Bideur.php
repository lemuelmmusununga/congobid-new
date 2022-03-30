<?php

namespace App\Models;

use App\Models\Bideur as ModelsBideur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bideur extends Model
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
        return $this->belongsTo(Paquet::class);
    }

    public function encheres()
    {
        return $this->hasMany(Enchere::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
