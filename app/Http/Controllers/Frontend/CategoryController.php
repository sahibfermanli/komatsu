<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CategoryController extends BaseController
{
    public function __construct($category_relations = ['media', 'sub_categories'])
    {
        parent::__construct($category_relations);
    }

    public function index(): Factory|View|Application
    {
        return view('frontend.categories');
    }

    public function sub_categories($slug): Factory|View|Application
    {
        $sub_categories = Category::query()
            ->whereHas('parent', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->get();

        return view('frontend.sub_categories', compact('sub_categories'));
    }
}
