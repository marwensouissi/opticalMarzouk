<?php

namespace App\Http\Controllers;
use App\Models\LunetteSol;


use Illuminate\Http\Request;

class LunetteSolController extends Controller
{
    public function index(Request $request)
    {
        // Check if there is a search query
        if ($request->has('search')) {
            $searchQuery = $request->input('search');
    
            // Perform the search using the new variables
            $lunettesSolaires = LunetteSol::where('reference', 'LIKE', "%$searchQuery%")
                ->orWhere('marque', 'LIKE', "%$searchQuery%")
                ->paginate(12); // Use paginate method with 12 items per page
        } else {
            // Fetch all Lunettes Solaires from the database with pagination
            $lunettesSolaires = LunetteSol::paginate(12); // Use paginate method with 12 items per page
        }
    
        // Pass the Lunettes Solaires data to the view
        return view('admin.solaire.index', compact('lunettesSolaires'));
    }
    

    public function create()
{
    return view('admin.solaire.create');
}

public function store(Request $request)
{
    // Validate the request data, including handling an array of image
    $validatedData = $request->validate([
        'reference' => 'required',
        'marque' => 'required',
        'image.*' => 'required', // Adjust validation rules for images
        'cover' => 'required', // Validation rule for the cover image
        'prix' => 'required',
        'type_monture' => 'required',
        'matiere_monture' => 'required',
        'couleur' => 'required',
        'adaptable' => 'required|in:0,1',// Ensure 'adaptable' is either 0 or 1
        'couleur_verre' => 'required',
        'verre_polarise' => 'required',
        'verre_degrade'=> 'required',
        'verre_miroirs'=> 'required', 
        'genre' => 'required',

    ]);


    // Create a new LunetteSol instance and save it to the database
    $validatedData['etat'] = 0;
    $lunetteSol = new LunetteSol($validatedData);

    // Handle cover image
    if ($request->hasFile('cover')) {
        // Generate a unique filename for the cover image
        $coverExtension = $request->file('cover')->getClientOriginalExtension();
        $coverFilename = 'cover_' . time() . '.' . $coverExtension;

        // Move the cover image to the desired location
        $request->file('cover')->move('produit/solaires', $coverFilename);

        // Save the cover image name to the LunetteSol model
        $lunetteSol->cover = $coverFilename;
    }

    // Handle other images
    $imageNames = [];

    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $index => $image) {
            // Generate a unique filename for each image
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . $index . '.' . $extension;

            // Move the image to the desired location
            $image->move('produit/solaires', $filename);

            // Store the image name in the array
            $imageNames[] = $filename;
        }
    }

    // Save the array of image names to the LunetteSol model
    $lunetteSol->image = implode(',', $imageNames);

    // Save the LunetteSol model
    $lunetteSol->save();

    // Redirect back or to a different route after storing the LunetteSol
    return redirect()->route('lunettesol.create')->with('success', 'LunetteSol added successfully!');
}
public function edit($id)
{
    $lunetteSol = LunetteSol::findOrFail($id);
    
    return view('admin.solaire.edit', compact('lunetteSol'));
}


public function update(Request $request, $id)
{
    // Validate the request
    $validatedData = $request->validate([
        'reference' => 'required',
        'marque' => 'required',
        'prix' => 'required',
        'type_monture' => 'required',
        'matiere_monture' => 'required',
        'couleur' => 'required',
        'etat' => 'required',
        'adaptable' => 'required', // Add adaptable to the validation rules
        'couleur_verre' => 'required',
        'verre_polarise' => 'required',
        'verre_degrade'=> 'required',
        'verre_miroirs'=> 'required', 
        'genre' => 'required',

    ]);

    // Find the LunetteSolaire instance by ID
    $lunetteSolaire = LunetteSol::findOrFail($id);

    // Handle cover image
    if ($request->hasFile('cover')) {
        // Delete the old cover image if it exists
        $this->deleteImage($lunetteSolaire->cover);

        // Generate a unique filename for the new cover image
        $coverExtension = $request->file('cover')->getClientOriginalExtension();
        $coverFilename = 'cover_' . time() . '.' . $coverExtension;

        // Move the new cover image to the desired location
        $request->file('cover')->move('produit/solaires', $coverFilename);

        // Save the new cover image name to the LunetteSolaire model
        $lunetteSolaire->cover = $coverFilename;
    }

    // Handle other images
    $newImageNames = [];

    if ($request->hasFile('image')) {
        // Delete the old images if they exist
        foreach (explode(',', $lunetteSolaire->image) as $image) {
            $this->deleteImage($image);
        }

        foreach ($request->file('image') as $index => $image) {
            // Generate a unique filename for each new image
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . $index . '.' . $extension;

            // Move the new image to the desired location
            $image->move('produit/solaires', $filename);

            // Store the new image name in the array
            $newImageNames[] = $filename;
        }

        // Save the array of new image names to the LunetteSolaire model
        $lunetteSolaire->image = implode(',', $newImageNames);
    }

    // Update the LunetteSolaire instance with the validated data
    $lunetteSolaire->update($validatedData);

    // Redirect to the index or show page with a success message
    return redirect()->route('lunettesol.index')->with('success', 'LunetteSolaire updated successfully!');
}

private function deleteImage($imageName)
{
    $imagePath = public_path('produit/solaire/' . $imageName);

    if (\File::exists($imagePath)) {
        \File::delete($imagePath);
    }
}

public function destroy($id)
{
    $lunetteSolaire = LunetteSol::findOrFail($id);

    // Delete cover image
    $coverImage = $lunetteSolaire->cover;
    $this->deleteImage($coverImage);

    // Delete other associated images
    $images = explode(',', $lunetteSolaire->image);
    foreach ($images as $image) {
        $this->deleteImage($image);
    }

    // Delete the LunetteSolaire instance
    $lunetteSolaire->delete();

    return redirect()->route('lunettesolaire.index')->with('success', 'LunetteSolaire deleted successfully!');
}

public function search(Request $request)
{
    // Validate the search query
    $request->validate([
        'search' => 'nullable|string',
    ]);

    // Get the search query from the form
    $searchQuery = $request->input('search');

    // Check if the search query is empty or null
    if (empty($searchQuery)) {
        // Fetch all Lunettes Solaires from the database
        $lunettesSolaires = LunetteSol::all();
    } else {
        // Perform the search using the 'reference' or 'marque' fields
        $lunettesSolaires = LunetteSol::where('reference', 'LIKE', "%$searchQuery%")
            ->orWhere('marque', 'LIKE', "%$searchQuery%")
            ->get();
    }

    // Pass the results to the view
    return view('admin.solaire.index', compact('lunettesSolaires'));
}








}
