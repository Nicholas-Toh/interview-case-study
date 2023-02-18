<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ResourceController;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends ResourceController
{
    public function index(Request $request) {
        
        return Product::with(['variations', 'attributes', 'images', 'categories'])
            ->when(Auth::id(), function ($query, $id) {
                $query
                    ->join('product_user', 'products.id', '=', 'product_user.product_id')
                    ->join('product_tier', 'products.id', '=', 'product_tier.product_id')
                    ->where('product_user.user_id', '=', $id)
                    ->where('product_tier.user_id', '=', $id);
            })
            ->paginate($request->input('limit', $this->limit));
    }

    public function categories(Request $request) {
        return ProductCategory::with(['children'])->paginate($request->input('limit', $this->limit));
    }
}
