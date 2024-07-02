<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LunetteOpt;
use App\Models\Montre;
use App\Models\LunetteSol;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class ProductController extends Controller
{  
    // Show product details
    public function show($type, $id)
    {
        $product = null;
        switch ($type) {
            case 'lunettesOptiques':
                $product = LunetteOpt::findOrFail($id);
                break;
            case 'montres':
                $product = Montre::findOrFail($id);
                break;
            case 'lunettesSolaires':
                $product = LunetteSol::findOrFail($id);
                break;
            default:
                abort(404); // Handle if type is not recognized
        }
        // Pass $product and $type to the view
        return view('products.show', compact('product', 'type'));
    }
    
    // Add product to cart
    public function addToCart(Request $request, $type, $id)
    {
        $product = null;
        switch ($type) {
            case 'lunettesOptiques':
                $product = LunetteOpt::findOrFail($id);
                break;
            case 'montres':
                $product = Montre::findOrFail($id);
                break;
            case 'lunettesSolaires':
                $product = LunetteSol::findOrFail($id);
                break;
            default:
                abort(404); // Handle if type is not recognized
        }
        $imagePath = $this->getImagePath($type, $product->cover);

        Cart::add(array(
            'id' => $type . '_' . $product->id,
            'name' => $product->marque . ' ' . $product->reference,
            'price' => $product->prix,
            'quantity' => 1,
            'attributes' => array(
                'type' => $type,
                'image' => $imagePath

            )
        ));


        return redirect()->route('products.panier')->with('success', 'Product added to cart!');
    }

    private function getImagePath($type, $cover)
    {
        $baseDir = 'produit/';

        switch ($type) {
            case 'lunettesOptiques':
                return $baseDir . 'optique/' . $cover;
            case 'montres':
                return $baseDir . 'montre/' . $cover;
            case 'lunettesSolaires':
                return $baseDir . 'solaires/' . $cover;
            default:
                return $baseDir . 'default.png';
        }
    }
}


    

    // Helper method to find a product by type and id

    

