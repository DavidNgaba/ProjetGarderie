<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinsEnfants extends Model
{
    use HasFactory;

    protected $fillable = [
        'enfant_id',
        'vaccin_id',
    ];
}
