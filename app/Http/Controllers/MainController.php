<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $categories = Category::withCount('products')
            -> orderBy('products_count', 'desc')
            -> take(8)
            -> get();

        $categoryProducts = [];
        foreach ($categories as $category) {
            $categoryProducts[] = [
                'category' => $category,
                'products' => Product::where('category_id', $category->id)
                    -> with('category')
                    -> take(4)
                    -> get(),
            ];
        }

        return view( 'home.index')
            -> with([
                'categoryProducts' => $categoryProducts,
            ]);

    }

    public function details($id){

        $product = Product::find($id);

        return view('product.details',['product' => $product]);
    }

}
