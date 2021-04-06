<?php

namespace App\Models;

use App\Models\Enfant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tuteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'enfant_id',
        'name',
        'lastname',
        'email',
        'phonenumber',
        'type',
    ];

    //Chaque enfant a un/plusieurs specifiques tuteur (relation one to many(inverse))
    public function enfants()
    {
        return $this->belongsTo(Enfant::class);
    }
}
