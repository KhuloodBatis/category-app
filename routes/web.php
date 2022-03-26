<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use App\Models\Category;


Route::get('/', function () {

    // $product = new Product;
    // $product->title = 'Apple Mouse';
    // $product->price = 20;

    // $product->save();
    // //assign

    // // $category = Category::where('slug', 'abc')->first();
    // //$category = Category::find([1,2]);
    // $category = Category::whereIn('title', ['Tech', 'Apple'])->get();

    //dd($category);
    //     $product =  Product::find(4);
    //     $category = Category::find(1);
    //    $product->categories()->attach($category);

    //to remove this product
    //$product->categories()->detach($category);

    //to remove to products
    //$category = Category::find(1); //tech
    //$product2 =  Product::find([4, 5]); //to remove products

    //$category->products()->detach($product);
    //to add again
    // $category->products()->attach($product2);

    //  $category = Category::find(1);
    //  $category->products()->sync([4,5]);

    $product = Product::find(4);
    $category = Category::find(1);
    $product->categories()->orWherePivot('visible',false)->updateExistingPivot($category->id , [
        'visible' => true
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories/{category}', [CategoryController::class, 'show']);


Route::get('/products/{product}', [ProductController::class, 'show']);
