<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonLike extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function encheres()
    {
        return $this->hasMany(Enchere::class);
    }

    public function pivotclientsalon()
    {
        return $this->hasMany(PivotClientsSalon::class);
    }

}
