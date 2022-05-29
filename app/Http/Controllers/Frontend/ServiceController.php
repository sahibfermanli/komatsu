<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ServiceController extends BaseController
{
    public function index(): Factory|View|Application
    {
        $services = Service::query()->get();

        return view('frontend.services', compact('services'));
    }
}
