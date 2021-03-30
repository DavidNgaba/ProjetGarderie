<?php

namespace App\Models;

use App\Models\Enfant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Educatrice extends Authenticatable
{
    use HasFactory, Notifiable;

    /*     protected $casts = [
        'date_naissance' => 'datetime:Y-m-d',
        'date_embauche' => 'datetime:Y-m-d',
    ]; */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'password',
        'sexe',
        'date_naissance',
        'date_embauche',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function enfants()
    {
        return $this->hasMany(Enfant::class);
    }
}
