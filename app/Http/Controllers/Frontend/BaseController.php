<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct($category_relations = ['sub_categories'])
    {
        $settings = Setting::query()
            ->with(['media'])
            ->find(1);

        $categories = Category::query()
            ->with($category_relations)
            ->whereNull('parent_id')
            ->get();

        $socials = Social::query()
            ->select('icon', 'url')
            ->get();

        View::share([
            'settings' => $settings,
            'categories' => $categories,
            'socials' => $socials,
        ]);
    }
}
