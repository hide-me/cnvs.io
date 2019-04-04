<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Get the home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(): View
    {
        $client = new Client();

        try {
            $request = $client->get('https://api.github.com/repos/cnvs/canvas/releases/latest');
            $response = json_decode($request->getBody()->getContents());

            $release = $response->tag_name;
        } catch (Exception $e) {
            logger()->error($e->getMessage());

            $release = null;
        }

        $data = [
            'release' => $release,
        ];

        return view('home', compact('data'));
    }
}
