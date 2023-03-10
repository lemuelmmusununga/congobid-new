<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Encheregagner extends Model
{
    use HasFactory;
    protected $guarded=[''];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }

    public function enchere()
    {
        return $this->belongsTo(Enchere::class,'enchere_id');
    }

    /**
     * Get the article that owns the Encheregagner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   /**
    * Get all of the article for the Encheregagner
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */


    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
