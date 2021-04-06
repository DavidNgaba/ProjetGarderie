<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmedicalesEnfants extends Model
{
    use HasFactory;

    protected $fillable = [
        'enfant_id',
        'cmedicale_id',
    ];
}
