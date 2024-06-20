<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LunetteOpt;
use App\Models\LunetteSol;
use App\Models\Montre;

class HomeController extends Controller
{
    public function index()
    {
        // Get 8 LunetteSolaires with genre = Femme and Homme
        $lunettesSolairesFemme = LunetteSol::where('genre', 'Femme')->where('etat', 0)->take(8)->get();
        $lunettesSolairesHomme = LunetteSol::where('genre', 'Homme')->where('etat', 0)->take(8)->get();

        // Get 8 LunetteOptiques with genre = Homme, Femme, and Enfant
        $lunettesOptiquesHomme = LunetteOpt::where('genre', 'Homme')->where('etat', 0)->take(8)->get();
        $lunettesOptiquesFemme = LunetteOpt::where('genre', 'Femme')->where('etat', 0)->take(8)->get();
        $lunettesOptiquesEnfant = LunetteOpt::where('genre', 'Enfant')->where('etat', 0)->take(8)->get();

        // Get 8 Montres
        $montres = Montre::where('etat', 0)->take(8)->get();

        // Pass the data to the view
        return view('welcome', compact(
            'lunettesSolairesFemme',
            'lunettesSolairesHomme',
            'lunettesOptiquesHomme',
            'lunettesOptiquesFemme',
            'lunettesOptiquesEnfant',
            'montres'
        ));
    }
}
