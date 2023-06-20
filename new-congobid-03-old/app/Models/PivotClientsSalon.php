<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PivotClientsSalon extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }

    public function salons()
    {
        return $this->belongsTo(Salon::class,'salon_id');
    }


}
