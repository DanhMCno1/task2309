<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Lấy tất cả các danh mục, bao gồm cả hình ảnh và trạng thái
        $categories = Category::select('id', 'name', 'image', 'status', 'parent_id')
            ->whereNull('deleted_at')  // Lọc ra những danh mục chưa bị xóa mềm
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $categories
        ]);
    }
}
