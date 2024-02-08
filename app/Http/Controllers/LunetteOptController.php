<?php

namespace App\Http\Controllers;
use App\Models\LunetteOpt;




use Illuminate\Http\Request;

class LunetteOptController extends Controller
{


    public function index(Request $request)
    {
        // Check if there is a search query
        if ($request->has('search')) {
            $searchQuery = $request->input('search');
    
            // Perform the search using the 'reference' or 'marque' fields
            $lunettesOptiques = LunetteOpt::where('reference', 'LIKE', "%$searchQuery%")
                ->orWhere('marque', 'LIKE', "%$searchQuery%")
                ->get();
        } else {
            // Fetch all Lunettes Optiques from the database
            $lunettesOptiques = LunetteOpt::all();
        }
    
        // Pass the Lunettes Optiques data to the view
        return view('admin.optique.index', compact('lunettesOptiques'));
    }
    


    public function create()
    {
        return view('admin.optique.create');
    }

    public function store(Request $request)
    {

        // Validate the request data, including handling an array of image
        $validatedData = $request->validate([
            'reference' => 'required',
            'marque' => 'required',
            'image.*' => 'required', // Adjust validation rules for images
            'cover' =>  'required', // Validation rule for the cover image
            'prix' => 'required',
            'type_monture' => 'required',
            'matiere_monture' => 'required',
            'couleur' => 'required',
            'apl' => 'required|in:0,1', // Ensure 'apl' is either 0 or 1
        ]);

    
        // Create a new LunetteOpt instance and save it to the database
        $validatedData['etat'] = 0;
        $lunetteOpt = new LunetteOpt($validatedData);
    
        // Handle cover image
        if ($request->hasFile('cover')) {
            // Generate a unique filename for the cover image
            $coverExtension = $request->file('cover')->getClientOriginalExtension();
            $coverFilename = 'cover_' . time() . '.' . $coverExtension;
    
            // Move the cover image to the desired location
            $request->file('cover')->move('produit/optique', $coverFilename);
    
            // Save the cover image name to the LunetteOpt model
            $lunetteOpt->cover = $coverFilename;
        }
    
        // Handle other images
        $imageNames = [];
    
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $image) {
                // Generate a unique filename for each image
                $extension = $image->getClientOriginalExtension();
                $filename = time() . '_' . $index . '.' . $extension;
    
                // Move the image to the desired location
                $image->move('produit/optique', $filename);
    
                // Store the image name in the array
                $imageNames[] = $filename;
            }
        }
    
        // Save the array of image names to the LunetteOpt model
        $lunetteOpt->image = implode(',', $imageNames);
    
        // Save the LunetteOpt model
        $lunetteOpt->save();
    
        // Redirect back or to a different route after storing the LunetteOpt
        return redirect()->route('lunetteopt.create')->with('success', 'LunetteOpt added successfully!');
    }
    public function edit($id)
{
    $lunetteOpt = LunetteOpt::findOrFail($id);
    return view('admin.optique.edit', compact('lunetteOpt'));
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
        'apl' => 'required',


    ]);


    // Find the LunetteOpt instance by ID
    $lunetteOpt = LunetteOpt::findOrFail($id);

    // Handle cover image
    if ($request->hasFile('cover')) {
        // Delete the old cover image if it exists
        $this->deleteImage($lunetteOpt->cover);

        // Generate a unique filename for the new cover image
        $coverExtension = $request->file('cover')->getClientOriginalExtension();
        $coverFilename = 'cover_' . time() . '.' . $coverExtension;

        // Move the new cover image to the desired location
        $request->file('cover')->move('produit/optique', $coverFilename);

        // Save the new cover image name to the LunetteOpt model
        $lunetteOpt->cover = $coverFilename;
    }

    // Handle other images
    $newImageNames = [];

    if ($request->hasFile('image')) {
        // Delete the old images if they exist
        foreach (explode(',', $lunetteOpt->image) as $image) {
            $this->deleteImage($image);
        }

        foreach ($request->file('image') as $index => $image) {
            // Generate a unique filename for each new image
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . $index . '.' . $extension;

            // Move the new image to the desired location
            $image->move('produit/optique', $filename);

            // Store the new image name in the array
            $newImageNames[] = $filename;
        }

        // Save the array of new image names to the LunetteOpt model
        $lunetteOpt->image = implode(',', $newImageNames);
    }

    // Update the LunetteOpt instance with the validated data
    $lunetteOpt->update($validatedData);

    // Redirect to the index or show page with a success message
    return redirect()->route('lunetteopt.index')->with('success', 'LunetteOpt updated successfully!');
}

    private function deleteImage($imageName)
    {
        $imagePath = public_path('produit/optique/' . $imageName);

        if (\File::exists($imagePath)) {
            \File::delete($imagePath);
        }

    }


    public function destroy($id)
    {
        $lunetteOpt = LunetteOpt::findOrFail($id);

        // Delete cover image
        $coverImage = $lunetteOpt->cover;
        $this->deleteImage($coverImage);

        // Delete other associated images
        $images = explode(',', $lunetteOpt->image);
        foreach ($images as $image) {
            $this->deleteImage($image);
        }

        // Delete the LunetteOpt instance
        $lunetteOpt->delete();

        return redirect()->route('lunetteopt.index')->with('success', 'LunetteOpt updated successfully!');
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
            // Fetch all Lunettes Optiques from the database
            $lunettesOptiques = LunetteOpt::all();
        } else {
            // Perform the search using the 'reference' or 'marque' fields
            $lunettesOptiques = LunetteOpt::where('reference', 'LIKE', "%$searchQuery%")
                ->orWhere('marque', 'LIKE', "%$searchQuery%")
                ->get();
        }
    
        // Pass the results to the view
        return view('admin.optique.index', compact('lunettesOptiques'));
    }
    


}
