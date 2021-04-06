<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllergiesEnfants extends Model
{
    use HasFactory;

    protected $fillable = [
        'enfant_id',
        'allergie_id',
    ];
}
