<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Product::query();

        // Filter by featured products if the "featured" parameter is present in the request
        if ($request->has('featured')) {
            $query->where('featured', $request->input('featured'));
        }

        // Paginate the results with a default of 10 items per page
        $perPage = $request->input('per_page', 10);
        $products = $query->paginate($perPage);

        return response()->json(['products' => $products]);
    }
}
