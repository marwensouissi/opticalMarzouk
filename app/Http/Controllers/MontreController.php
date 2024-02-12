<?php

namespace App\Http\Controllers;
use App\Models\Montre;




use Illuminate\Http\Request;

class MontreController extends Controller
{

    public function index(Request $request)
    {
        // Check if there is a search query
        if ($request->has('search')) {
            $searchQuery = $request->input('search');
    
            // Perform the search using the 'reference' or 'marque' fields
            $Montre = Montre::where('reference', 'LIKE', "%$searchQuery%")
                ->orWhere('marque', 'LIKE', "%$searchQuery%")
                ->paginate(12); // Paginate the search results with 10 items per page
        } else {
            // Fetch all Lunettes Optiques from the database with pagination
            $Montre = Montre::paginate(12); // Paginate all results with 12 items per page
        }
    
        // Check if the current page is greater than the last page
        if ($Montre->currentPage() > $Montre->lastPage()) {
            // Redirect to the last page
            return redirect($Montre->url($Montre->lastPage()));
        }
    
        // Pass the Lunettes Optiques data to the view
        return view('admin.montre.index', compact('Montre'));
    }
    
    
    


    public function create()
    {
        return view('admin.montre.create');
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
            'genre' => 'required',

        ]);

    
        // Create a new Montre instance and save it to the database
        $validatedData['etat'] = 0;
        $montre = new Montre($validatedData);
    
        // Handle cover image
        if ($request->hasFile('cover')) {
            // Generate a unique filename for the cover image
            $coverExtension = $request->file('cover')->getClientOriginalExtension();
            $coverFilename = 'cover_' . time() . '.' . $coverExtension;
    
            // Move the cover image to the desired location
            $request->file('cover')->move('produit/montre', $coverFilename);
    
            // Save the cover image name to the Montre model
            $montre->cover = $coverFilename;
        }
    
        // Handle other images
        $imageNames = [];
    
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $image) {
                // Generate a unique filename for each image
                $extension = $image->getClientOriginalExtension();
                $filename = time() . '_' . $index . '.' . $extension;
    
                // Move the image to the desired location
                $image->move('produit/montre', $filename);
    
                // Store the image name in the array
                $imageNames[] = $filename;
            }
        }
    
        // Save the array of image names to the Montre model
        $montre->image = implode(',', $imageNames);
    
        // Save the Montre model
        $montre->save();
    
        // Redirect back or to a different route after storing the Montre
        return redirect()->route('montre.create')->with('success', 'Montre added successfully!');
    }
    public function edit($id)
{
    $montre = Montre::findOrFail($id);
    return view('admin.montre.edit', compact('montre'));
}
public function update(Request $request, $id)
{

    // Validate the request
    $validatedData = $request->validate([
        'reference' => 'required',
        'marque' => 'required',
        'prix' => 'required',
        'etat' => 'required',
        'genre' => 'required',

    ]);


    // Find the Montre instance by ID
    $montre = Montre::findOrFail($id);

    // Handle cover image
    if ($request->hasFile('cover')) {
        // Delete the old cover image if it exists
        $this->deleteImage($montre->cover);

        // Generate a unique filename for the new cover image
        $coverExtension = $request->file('cover')->getClientOriginalExtension();
        $coverFilename = 'cover_' . time() . '.' . $coverExtension;

        // Move the new cover image to the desired location
        $request->file('cover')->move('produit/montre', $coverFilename);

        // Save the new cover image name to the Montre model
        $montre->cover = $coverFilename;
    }

    // Handle other images
    $newImageNames = [];

    if ($request->hasFile('image')) {
        // Delete the old images if they exist
        foreach (explode(',', $montre->image) as $image) {
            $this->deleteImage($image);
        }

        foreach ($request->file('image') as $index => $image) {
            // Generate a unique filename for each new image
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . $index . '.' . $extension;

            // Move the new image to the desired location
            $image->move('produit/montre', $filename);

            // Store the new image name in the array
            $newImageNames[] = $filename;
        }

        // Save the array of new image names to the Montre model
        $montre->image = implode(',', $newImageNames);
    }

    // Update the Montre instance with the validated data
    $montre->update($validatedData);

    // Redirect to the index or show page with a success message
    return redirect()->route('montre.index')->with('success', 'Montre updated successfully!');
}

    private function deleteImage($imageName)
    {
        $imagePath = public_path('produit/montre/' . $imageName);

        if (\File::exists($imagePath)) {
            \File::delete($imagePath);
        }

    }


    public function destroy($id)
    {
        $montre = Montre::findOrFail($id);

        // Delete cover image
        $coverImage = $montre->cover;
        $this->deleteImage($coverImage);

        // Delete other associated images
        $images = explode(',', $montre->image);
        foreach ($images as $image) {
            $this->deleteImage($image);
        }

        // Delete the Montre instance
        $montre->delete();

        return redirect()->route('montre.index')->with('success', 'Montre updated successfully!');
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
            $montre = Montre::all();
        } else {
            // Perform the search using the 'reference' or 'marque' fields
            $montre = Montre::where('reference', 'LIKE', "%$searchQuery%")
                ->orWhere('marque', 'LIKE', "%$searchQuery%")
                ->get();
        }
    
        // Pass the results to the view
        return view('admin.montre.index', compact('montre'));
    }
    


}
