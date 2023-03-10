<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Enchere extends Model
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

    public function pivotbideurenchere()
    {
        return $this->hasMany(PivotBideurEnchere::class);
    }

    public function gagnant()
    {
        return $this->hasMany(Gagnant::class);
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function bideur()
    {
        return $this->belongsTo(Bideur::class);
    }
    public function paquet(){
        return $this->belongsTo(Paquet::class,'paquet_id');
    }
    /**
     * Get the article that owns the Enchere
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
    


}
