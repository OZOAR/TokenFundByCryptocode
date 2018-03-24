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
     * @param LocalizationRequest $request Validates input lang before changing locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLocale(LocalizationRequest $request)
    {
        Session::put(Localization::LOCALE, $request->input('lang'));

        return redirect()->back();
    }
}
