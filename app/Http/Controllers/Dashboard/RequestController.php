<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Request;

class RequestController extends Controller
{
    const REQUESTS_PER_PAGE = 10;

    /**
     * Show all requests.
     *
     * @return $this
     */
    public function showRequests()
    {
        $requests = Request::with('owner')->paginate(self::REQUESTS_PER_PAGE);

        return view('dashboard.requests.index')->with('requests', $requests);
    }

    /**
     * Show particular request page.
     *
     * @param null $requestId
     * @return $this
     */
    public function showParticularRequest($requestId = null)
    {
        $request = Request::with('owner')->find($requestId);

        return view('dashboard.requests.show')->with('request', $request);
    }
}
