<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunetteSol extends Model
{
    protected $fillable = ['reference','genre', 'marque', 'prix', 'type_monture', 'matiere_monture', 'couleur', 'etat', 'cover', 'couleur_verre','verre_polarise','verre_degrade','verre_miroirs','image','adaptable','solde'];
}