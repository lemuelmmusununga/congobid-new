<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sanction extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sanction()
    {
        return $this->belongsTo(User::class , 'suspendu_by');
    }
    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }
    /**
     * Get the enchere that owns the Sanction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enchere()
    {
        return $this->belongsTo(Enchere::class, 'enchere_id');
    }
}
