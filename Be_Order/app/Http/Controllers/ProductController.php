<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả sản phẩm
        $products = Product::all();

        // Trả về phản hồi JSON
        return response()->json([
            'status' => 'success',
            'data' => [
                'products' => $products
            ]
        ]);
    }
}
