<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducatriceSpecialisations extends Model
{
    use HasFactory;

    protected $fillable = [
        'educatrice_id',
        'description',
    ];

    //La specification est assigné à une educatrice
    public function educatrice()
    {
        return $this->belongsTo(Educatrice::class);
    }
}
