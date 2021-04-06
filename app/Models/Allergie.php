<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function enfant()
    {
        return $this->belongsToMany(Enfant::class, 'allergies_enfants');
    }
}
