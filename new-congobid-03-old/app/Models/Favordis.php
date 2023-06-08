<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Enchere;
class Favorite extends Model
{
    use HasFactory;

    protected $guarded=[];

    /**
     * Get the user that owns the Favorite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the enchere that owns the Favorite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enchere()
    {
        return $this->belongsTo(Enchere::class, 'enchere_id');
    }
}
