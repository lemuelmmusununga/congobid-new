<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Roi extends Model
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
    /**
     * Get the user that owns the Roi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paquet()
    {
        return $this->belongsTo(Paquet::class, 'paquet_id');
    }
}
