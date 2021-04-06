<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comportement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
    ];

    public function enfant()
    {
        return $this->belongsToMany(Enfant::class, 'comportements_enfants');
    }
}
