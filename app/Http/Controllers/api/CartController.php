<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = $user->cartItems;

        return response()->json(['cart_items' => $cartItems]);
    }

    public function addToCart(Request $request)
    {
        $user = Auth::user();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // Update quantity if item already exists in the cart
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Add a new item to the cart
            $cartItem = new Cart([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
            $cartItem->save();
        }

        return response()->json(['cart_item' => $cartItem]);
    }

    public function removeFromCart(Request $request)
    {
        $user = Auth::user();
        $productId = $request->input('product_id');

        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['message' => 'Item removed from the cart']);
        }

        return response()->json(['message' => 'Item not found in the cart'], 404);
    }
}