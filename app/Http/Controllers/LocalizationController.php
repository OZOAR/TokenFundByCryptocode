<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocalizationRequest;
use App\Http\Middleware\Localization;
use Session;

class LocalizationController extends Controller
{
    /**
     * Change locale on the website for current session.
     *
     * @param LocalizationRequest $request Validates input $lang before changing locale
     * @param null $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLocale(LocalizationRequest $request, $lang = null)
    {
        Session::put(Localization::LOCALE, $lang);

        return redirect()->back();
    }
}
