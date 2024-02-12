<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunetteOpt extends Model
{
    protected $fillable = ['reference','genre', 'marque', 'prix', 'type_monture', 'matiere_monture', 'couleur', 'etat', 'apl','image','cover'];
}
