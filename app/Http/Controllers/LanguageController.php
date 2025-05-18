<?php
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($locale): RedirectResponse
    {
        if (!in_array($locale, ['en', 'fr', 'rw'])) {
            abort(400);
        }

        Session::put('locale', $locale);
        App::setLocale($locale);

        return redirect()->back();
    }
}
