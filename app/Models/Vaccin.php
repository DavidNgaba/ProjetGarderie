<?php

namespace App\Models;

use App\Models\Enfant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vaccin extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function enfant()
    {
        return $this->belongsToMany(Enfant::class, 'vaccins_enfants');
    }
}
