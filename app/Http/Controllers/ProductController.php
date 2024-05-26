<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $request -> validate([
            'q' => 'nullable|string|max:255',
            'categories' => 'nullable|array|min:0',
            'categories.*' => 'nullable|integer|min:1',
            'sort' => 'nullable|string|in:new-to-old,old-to-new,low-to-high,high-to-low',

        ]);

        $q = $request->q ?: null;
        $f_categories = $request->has('categories') ? $request->categories : [];
        $f_sort = $request->has('sort') ? $request->sort : null;


        $products = Product::when($q, function ($query, $q) {
            return $query->where(function ($query) use ($q) {
                $query->orWhere('name', 'like', '%' . $q . '%');
            });
        })
            ->when($f_categories, function ($query, $f_categories) {
                $query->whereIn('category_id', $f_categories);
            })

            ->when(isset($f_sort), function ($query) use ($f_sort) {
                if ($f_sort == 'old-to-new') {
                    $query->orderBy('id');
                } elseif ($f_sort == 'high-to-low') {
                    $query->orderBy('price', 'desc');
                } elseif ($f_sort == 'low-to-high') {
                    $query->orderBy('price');
                } else {
                    $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                $query->orderBy('id', 'desc');
            });

            $categories = Category::orderBy('name')
                ->get();

        return view('product.index')
            ->with([
                'q' => $q,
                'products' => $products,
                'categories' => $categories,
                'f_categories' => $f_categories,
                'f_sort' => $f_sort,
            ]);
    }
}
