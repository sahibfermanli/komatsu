<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brochure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BrochureController extends BaseController
{
    public function index(): Factory|View|Application
    {
        $brochures = Brochure::query()
            ->with(['media'])
            ->get();

        return view('frontend.brochures', compact('brochures'));
    }
}
