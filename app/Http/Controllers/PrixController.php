<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PrixController extends Controller
{
    public function index()
    {
     
            // Fetch data from the database for each table
            $tables['1_6']['data'] = DB::table('1_6')->get();
            $tables['1_56']['data'] = DB::table('1_56')->get();
            $tables['1_67']['data'] = DB::table('1_67')->get();
            $tables['1_74']['data'] = DB::table('1_74')->get();
    
            // Pass the data to the blade view
            return view('admin.prix.index', compact('tables'));
        
    }

    public function updateTable(Request $request, $tableName)
    {
        $formData = $request->all();

        // Loop through the submitted form data and update the database
        foreach ($formData['sphere'] as $key => $value) {
            DB::table($tableName)
                ->where('id', $key + 1) // Assuming 'id' is the primary key
                ->update([
                    'sphere' => $value,
                    'cylindre0' => $formData['cylindre0'][$key],
                    'cylindre-0_25_to-2_00' => $formData['cylindre_0_25_to_2_00'][$key],
                    'cylindre-2_25_to-3_00' => $formData['cylindre_2_25_to_3_00'][$key],
                    'cylindre-3_25_to-4_00' => $formData['cylindre_3_25_to_4_00'][$key],
                ]);
        }

        return redirect()->back()->with('success', 'Table updated successfully!');
    }

}
