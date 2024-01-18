<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // index
    public function index()
    {
        // get all categories
        $categories = \App\Models\Category::all();
        return response()->json([
            'message' => 'Success',
            'data' => $categories
        ], 200);
    }
}
