<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {

        // dd($category);

        //return view('category.show', compact('category'));


        $products = $category->products()->orderBy('created_at', 'desc')->paginate(2);
        return view('category.show', compact('category', 'products'));
    }
}
