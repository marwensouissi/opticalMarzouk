<?php

namespace App\Http\Controllers;
use App\Models\LunetteOpt;




use Illuminate\Http\Request;

class LunetteOptController extends Controller
{


    public function index()
    {
        // Fetch all Lunettes Optiques from the database
        $lunettesOptiques = LunetteOpt::all();

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
            'image.*' => 'required', // Validation rule for each image in the array
            'prix' => 'required',
            'type_monture' => 'required',
            'matiere_monture' => 'required',
            'couleur' => 'required',
        ]);


        // Create a new LunetteOpt instance and save it to the database
        $validatedData['etat'] = 0;
        $lunetteOpt = new LunetteOpt($validatedData);

        $imageNames = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $image) {
                // Generate a unique filename for each image
                $extention = $image->getClientOriginalExtension();
                $filename = time() . '_' . $index . '.' . $extention;
    
                // Move the image to the desired location
                $image->move('produit/optique', $filename);
    
                // Store the image name in the array
                $imageNames[] = $filename;
            }
        }
    
        // Save the array of image names to the LunetteOpt model
        $lunetteOpt->image = implode(',', $imageNames);
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
        $validatedData = $request->validate([
            'reference' => 'required|string',
            'marque' => 'required|string',
            'prix' => 'required|integer',
            'type_monture' => 'required|string',
            'matiere_monture' => 'required|string',
            'couleur' => 'required|string',
            'etat' => 'required|integer',
        ]);

        $lunetteOpt = LunetteOpt::findOrFail($id);
        $lunetteOpt->update($validatedData);

        return redirect()->route('lunetteopt.index')->with('success', 'LunetteOpt updated successfully!');
    }

    public function destroy($id)
    {
        $lunetteOpt = LunetteOpt::findOrFail($id);
        $lunetteOpt->delete();

        return redirect()->route('lunetteopt.index')->with('success', 'LunetteOpt deleted successfully!');
    }





}
