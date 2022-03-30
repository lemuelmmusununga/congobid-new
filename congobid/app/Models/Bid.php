<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bid extends Model
{
    use HasFactory;
    

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }
}
