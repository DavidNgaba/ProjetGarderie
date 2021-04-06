<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComportementsEnfants extends Model
{
    use HasFactory;
    protected $fillable = [
        'enfant_id',
        'comportement_id',
    ];
}
