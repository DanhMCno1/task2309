<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả sản phẩm và chi tiết sản phẩm với eager loading
        $products = Product::with('productDetails')->get();

        return response()->json([
            'status' => 'success',
            'data' => [
                'products' => $products
            ]
        ]);
    }
}

