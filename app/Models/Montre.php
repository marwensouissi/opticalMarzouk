<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montre extends Model
{
    protected $fillable = ['reference','genre', 'marque', 'prix', 'etat', 'cover','image'];
}
