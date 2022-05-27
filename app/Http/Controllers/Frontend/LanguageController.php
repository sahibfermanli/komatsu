<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function set_locale_language($locale): RedirectResponse
    {
        $locale = Str::lower($locale);

        //dd($locale);

        if (array_key_exists($locale, Config::get('languages'))) {
            Session::put('applocale', $locale);
        }

        return Redirect::back();
    }
}
