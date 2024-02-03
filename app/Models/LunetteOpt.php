<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunetteOpt extends Model
{
    protected $fillable = ['reference', 'marque', 'prix', 'type_monture', 'matiere_monture', 'couleur', 'etat','image'];
}
