<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enchere;
class Chat_enchere extends Model
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
     * Get the enchere that owns the Chat_enchere
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enchere()
    {
        return $this->belongsTo(Enchere::class, 'enchere_id');
    }
}
