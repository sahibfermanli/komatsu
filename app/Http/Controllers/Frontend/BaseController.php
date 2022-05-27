<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Social;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $local_languages = ['az', 'en', 'ru'];

        $categories = Category::query()
            ->whereNull('parent_id')
            ->select('id', 'name_en as name')
            ->get();

        $socials = Social::query()
            ->select('icon', 'url')
            ->get();

        View::share([
            'categories' => $categories,
            'socials' => $socials,
            'local_languages' => $local_languages
        ]);
    }
}
