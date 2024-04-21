<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LunetteOpt;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\View;
use App\Models\LunetteSol;
use App\Models\Montre;


class SoldeController extends Controller
{

    public function index()
    {
        // Fetch the top 5 solde items from each category
        $soldeOptiques = LunetteOpt::where('solde', '>', 0)->take(5)->get();
        $soldeSolaires = LunetteSol::where('solde', '>', 0)->take(5)->get();
        $soldeMontres = Montre::where('solde', '>', 0)->take(5)->get();

        // Pass the data to the blade view
        return view('admin.solde.index', compact('soldeOptiques', 'soldeSolaires', 'soldeMontres'));
    }


// Lunette optique 
    
    public function optique(Request $request)
    {
        // Validate the search query
        $request->validate([
            'search' => 'nullable|string',
        ]);

        // Get the search query from the form
        $searchQuery = $request->input('search');

        // Number of items per page (can be configurable)
        $itemsPerPage = 10;

        // Fetch Lunettes Optiques from the database based on search query or fetch all with pagination
        $lunettesOptiques = LunetteOpt::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('reference', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('marque', 'LIKE', '%' . $searchQuery . '%');
        })->paginate($itemsPerPage);

        // Pass the paginated results and search query to the view
        return view('admin.solde.optique', compact('lunettesOptiques', 'searchQuery'));
    }
    public function searchOpt(Request $request)
    {
        // Validate the search query
        $request->validate([
            'search' => 'nullable|string',
        ]);
    
        // Get the search query from the form
        $searchQuery = $request->input('search');
    
        // Number of items per page (can be configurable)
        $itemsPerPage = 10;
    
        // Check if the search query is empty or null
        if (empty($searchQuery)) {
            // Fetch all Lunettes Optiques from the database with pagination
            $lunettesOptiques = LunetteOpt::paginate($itemsPerPage);
        } else {
            // Perform the search using the 'reference' or 'marque' fields with pagination
            $lunettesOptiques = LunetteOpt::where('reference', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('marque', 'LIKE', '%' . $searchQuery . '%')
                ->paginate($itemsPerPage);
        }
    
        // Pass the paginated results to the view
        return view('admin.solde.optique', compact('lunettesOptiques'));
    }
    public function updateSolde(Request $request)
    {
        // Validate the request
        $request->validate([
            'solde_percentage' => 'required|numeric|min:0|max:100',
            'selected_products' => 'required|array',
        ]);

        // Get the solde percentage from the request
        $soldePercentage = $request->input('solde_percentage');


        // Get the selected product IDs
        $selectedProductIds = $request->input('selected_products');

        // Update the solde field for selected products
        LunetteOpt::whereIn('id', $selectedProductIds)->update([
            'solde' => $soldePercentage,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Solde updated successfully.');
    }


    // Lunette solaire 

    public function solaire(Request $request)
{
    // Validate the search query
    $request->validate([
        'search' => 'nullable|string',
    ]);

    // Get the search query from the form
    $searchQuery = $request->input('search');

    // Number of items per page (can be configurable)
    $itemsPerPage = 10;

    // Fetch Lunettes Solaires from the database based on search query or fetch all with pagination
    $lunettesSolaires = LunetteSol::when($searchQuery, function ($query) use ($searchQuery) {
        return $query->where('reference', 'LIKE', '%' . $searchQuery . '%')
            ->orWhere('marque', 'LIKE', '%' . $searchQuery . '%');
    })->paginate($itemsPerPage);

    // Pass the paginated results and search query to the view
    return view('admin.solde.solaire', compact('lunettesSolaires', 'searchQuery'));
}

public function searchSolaire(Request $request)
{
    // Validate the search query
    $request->validate([
        'search' => 'nullable|string',
    ]);

    // Get the search query from the form
    $searchQuery = $request->input('search');

    // Number of items per page (can be configurable)
    $itemsPerPage = 10;

    // Check if the search query is empty or null
    if (empty($searchQuery)) {
        // Fetch all Lunettes Solaires from the database with pagination
        $lunettesSolaires = LunetteSol::paginate($itemsPerPage);
    } else {
        // Perform the search using the 'reference' or 'marque' fields with pagination
        $lunettesSolaires = LunetteSol::where('reference', 'LIKE', '%' . $searchQuery . '%')
            ->orWhere('marque', 'LIKE', '%' . $searchQuery . '%')
            ->paginate($itemsPerPage);
    }

    // Pass the paginated results to the view
    return view('admin.solde.solaire', compact('lunettesSolaires'));
}

public function updateSoldeSolaire(Request $request)
{
    // Validate the request
    // Validate the request
    $request->validate([
        'solde_percentage' => 'required|numeric|min:0|max:100',
        'selected_products' => 'required|array',
    ]);

    // Get the solde percentage from the request
    $soldePercentage = $request->input('solde_percentage');


    // Get the selected product IDs
// Get the selected product IDs
    $selectedProductIds = $request->input('selected_products');


    // Update the solde field for selected products
    LunetteSol::whereIn('id', $selectedProductIds)->update([
        'solde' => $soldePercentage,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Solde updated successfully.');
} 

//moooooooooooooooooooooooooooooooontre 

public function montre(Request $request)
{
    // Validate the search query
    $request->validate([
        'search' => 'nullable|string',
    ]);

    // Get the search query from the form
    $searchQuery = $request->input('search');

    // Number of items per page (can be configurable)
    $itemsPerPage = 10;

    // Fetch Lunettes Solaires from the database based on search query or fetch all with pagination
    $Montre = Montre::when($searchQuery, function ($query) use ($searchQuery) {
        return $query->where('reference', 'LIKE', '%' . $searchQuery . '%')
            ->orWhere('marque', 'LIKE', '%' . $searchQuery . '%');
    })->paginate($itemsPerPage);

    // Pass the paginated results and search query to the view
    return view('admin.solde.montre', compact('Montre', 'searchQuery'));
}
public function updateSoldeMontre(Request $request)
{
    // Validate the request
    // Validate the request
    $request->validate([
        'solde_percentage' => 'required|numeric|min:0|max:100',
        'selected_products' => 'required|array',
    ]);

    // Get the solde percentage from the request
    $soldePercentage = $request->input('solde_percentage');


    // Get the selected product IDs
// Get the selected product IDs
    $selectedProductIds = $request->input('selected_products');


    // Update the solde field for selected products
    Montre::whereIn('id', $selectedProductIds)->update([
        'solde' => $soldePercentage,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Solde updated successfully.');
} 




    

}
