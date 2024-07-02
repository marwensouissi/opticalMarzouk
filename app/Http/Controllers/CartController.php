<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::getContent();
        return view('products.panier', compact('cartItems'));
    }

    public function addToCart(Request $request, $type, $id)
    { 
        // Fetch the product based on the type and ID
        $product = $this->getProductByTypeAndId($type, $id);

        // Determine the image path based on the product type
        $imagePath = $this->getImagePath($type, $product->cover);

        // Add the product to the cart
        Cart::add([
            'id' => $product->id,
            'name' => $product->reference,
            'price' => $product->prix,
            'quantity' => 1,
            'attributes' => [
                'type' => $type,
                'image' => $imagePath,
            ],
        ]);

        return redirect()->route('products.show', ['type' => $type, 'id' => $id])->with('success', 'Product added to cart successfully.');
    }

    public function removeItem($id)
    {
        Cart::remove($id);

        return redirect()->route('products.panier')->with('success', 'Item removed from cart.');
    }

    public function clear()
    {
        Cart::clear();

        return redirect()->route('products.panier')->with('success', 'Cart cleared.');
    }

    private function getProductByTypeAndId($type, $id)
    {
        switch ($type) {
            case 'lunettesOptiques':
                return LunettesOptiques::find($id);
            case 'montres':
                return Montres::find($id);
            case 'lunettesSolaires':
                return LunettesSolaires::find($id);
            default:
                return null;
        }
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
                return $baseDir . 'solaire/' . $cover;
            default:
                return $baseDir . 'default.png';
        }
    }
}
