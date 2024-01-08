<?php

    namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('query');
    
        $products = Product::when( $searchQuery, function ($queryBuilder, $query) {
            return $queryBuilder->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('name', 'like', '%' . $query . '%')
                    ->orWhereHas('category', function ($queryBuilder) use ($query) {
                        $queryBuilder->where('name', 'like', '%' . $query . '%');
                    });
            });
        })
        ->paginate(10);
    
        return view('products.list', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('products.create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        try{
        // Validation logic here...
        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->store('images', 'public'); // Adjust the storage path as needed
                $uploadedImages[] = $imageName;
            }
        }
        $jsonImages = json_encode($uploadedImages);
        $product = new Product($request->all());
        $product->images = $jsonImages;
        $product->save();

        // Redirect or do something else after saving...

       // Assuming you have a route named 'products.index'
       $redirectUrl = route('products.index');

       return response()->json(['success' => true, 'message' => 'Product added successfully', 'redirect_url' => $redirectUrl]);
    }Catch (Exception $e){
        \Log::error("message==". $e);
    }
    }

    public function edit($id)
{
    try{
    $product = Product::findOrFail($id);
    $categories = Category::all();
    $brands = Brand::all();
    // You can pass additional data to the view if needed
    return view('products.edit', compact('product','categories', 'brands'));
}Catch (Exception $e){
    \Log::error("message==". $e);
}
}
public function updateFeaturedStatus($id)
{
    $product = Product::find($id);

    if ($product) {
        $product->update(['featured' => request('isFeatured')]);
        return response()->json(['success' => 'Featured status updated successfully']);
    }

    return response()->json(['error' => 'Product not found'], 404);
}
}
