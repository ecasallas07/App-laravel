<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'address',
        'zip_code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //HasOne indica relacion de 1 a 1
    // public function phone():HasOne
    // {
    //     return $this->hasOne(Phone::class,'user_id','id');
    // }


    //Hasmany  significa relacion de un unico telefono a que puede tener muchos usuario
    //Le indico que puede tener mucho teklefonos en evez de uno
    public function phone():HasMany
    {
        return $this->hasMany(Phone::class);
    }

    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withPivot('add_by');
    }
}
