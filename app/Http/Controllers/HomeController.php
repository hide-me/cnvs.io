<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(): View
    {
        $client = new Client();
        $request = $client->get('https://api.github.com/repos/cnvs/canvas/releases/latest');
        $response = $request->getStatusCode() == 200 ? json_decode($request->getBody()->getContents()) : null;

        $data = [
            'release' => $response->tag_name,
        ];

        return view('home', compact('data'));
    }
}
