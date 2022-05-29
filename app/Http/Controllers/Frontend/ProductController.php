<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends BaseController
{
    public function index($category_slug): Factory|View|Application
    {
        $products = Product::query()
            ->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            })
            ->with(['media'])
            ->get();

        return view('frontend.products', compact('products'));
    }

    public function show($category_slug, $product_slug): Factory|View|Application
    {
        $product = Product::query()
            ->with(['media'])
            ->where('slug', $product_slug)
            ->firstOrFail();

        return view('frontend.product_info', compact('product'));
    }
}
