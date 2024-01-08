<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  // Add 'name' to the fillable array
        'description',
        'sku',
        'price',
        'quantity_available',
        'category_id',
        'brand_id',
        'weight',
        'dimensions',
        'images',
        'active',
        'featured'
        // Add other attributes as needed
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}
public function brand()
{
    return $this->belongsTo(Brand::class);
}
}
