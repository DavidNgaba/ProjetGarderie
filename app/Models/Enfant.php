<?php

namespace App\Models;

use App\Models\Vaccin;
use App\Models\Educatrice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enfant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'sexe',
        'date_naissance',
        'educatrice_id',
    ];

    public function vaccin()
    {
        return $this->belongsToMany(Vaccin::class, 'vaccins_enfants');
    }

    public function educatrice()
    {
        return $this->belongsTo(Educatrice::class);
    }
}
