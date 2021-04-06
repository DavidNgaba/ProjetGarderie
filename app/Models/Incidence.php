<?php

namespace App\Models;

use App\Models\Enfant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incidence extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_incident',
        'heure_incident',
        'description',
        'enfant_id',
    ];

    //L'incidence est affect/ a un enfant
    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
}
