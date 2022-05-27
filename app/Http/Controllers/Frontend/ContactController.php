<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactController extends BaseController
{
    public function index(): Factory|View|Application
    {
        return view('frontend.contact');
    }
}
