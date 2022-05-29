<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use Illuminate\Contracts\View\View;

class HomeController extends BaseController
{
    public function index(): View
    {
        $sliders = Slider::query()
            ->with(['media'])
            ->get();

        return view('frontend.index', compact('sliders'));
    }
}
