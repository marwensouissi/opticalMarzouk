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
        // Logic to retrieve product details based on $type and $id
        // Example logic assuming $type can be 'lunettesOptiques', 'montre', 'lunettesSolaires', etc.
        // Replace with your actual logic to fetch the product details
        
        $product = null; // Replace with your logic to fetch the product from the database
        
        // Example of adding product to cart using the Cart facade
        Cart::add([
            'id' => $product->id, // Unique identifier for the product
            'name' => $product->reference, // Name of the product
            'price' => $product->prix, // Price of the product
            'quantity' => 1, // Default quantity to add to cart
            'attributes' => [
                'type' => $type, // Type of product (e.g., lunettesOptiques, montre, lunettesSolaires, etc.)
                'image' => $product->cover, // Example attribute (cover image)
            ],
        ]);

        // Redirect back to the previous page or to a specific route
        return redirect()->route('products.show', ['type' => $type, 'id' => $id])->with('success', 'Product added to cart successfully.');
    }

    public function removeItem($id)
    {
        // Logic to remove item from cart
        Cart::remove($id);

        return redirect()->route('products.panier')->with('success', 'Item removed from cart.');
    }

    public function clear()
    {
        // Logic to clear the cart
        Cart::clear();

        return redirect()->route('products.panier')->with('success', 'Cart cleared.');
    }
}
