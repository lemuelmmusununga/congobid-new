<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens;
    use HasFactory;
    // use HasProfilePhoto;
    use Notifiable;
    //
    // use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'role_id',
        'nom',
        'name',
        'prenom',
        'username',
        'telephone',
        'sexe',
        'email',
        'avatar',
        'date_naissance',
        'password',
        'statut_id',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // protected $appends = [
    //     'profile_photo_url',
    // ];

    public function administrateurs()
    {
        return $this->hasMany(Administrateur::class);
    }
    public function blocked()
    {
        return $this->hasMany(Bloque::class, 'user_action');
    }
    public function adminagents()
    {
        return $this->hasMany(Administrateur::class, 'administrateur_id');
    }

    public function adminbideurs()
    {
        return $this->hasMany(Bideur::class, 'admin_id');
    }

    public function paquets()
    {
        return $this->hasMany(Paquet::class);
    }

    public function bideurs()
    {
        return $this->hasMany(Bideur::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'user_id');
    }

    public function gagnants()
    {
        return $this->hasMany(Gagnant::class);
    }

    public function politiques()
    {
        return $this->hasMany(Gagnant::class);
    }

    public function faqs()
    {
        return $this->hasMany(Gagnant::class);
    }

    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }

    public function newsletters()
    {
        return $this->hasMany(Newsletter::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function encheres()
    {
        return $this->hasMany(Enchere::class);
    }

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }

    public function foudres()
    {
        return $this->hasMany(Foudre::class);
    }

    public function rois()
    {
        return $this->hasMany(Roi::class);
    }

    public function sanctions()
    {
        return $this->hasMany(Sanction::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function pivotbideurenchere()
    {
        return $this->hasMany(PivotBideurEnchere::class);
    }

    public function pivotbideurpaquet()
    {
        return $this->hasMany(PivotBideurPaquet::class);
    }

    public function pivotclientsSalon()
    {
        return $this->hasMany(PivotClientsSalon::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function communiques()
    {
        return $this->hasMany(Communique::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }

    public function instructions()
    {
        return $this->hasMany(Instruction::class);
    }

    public function typescoupons()
    {
        return $this->hasMany(TypesCoupon::class);
    }

    public function bidreceived()
    {
        return $this->hasMany(Envoie::class);
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }
}
