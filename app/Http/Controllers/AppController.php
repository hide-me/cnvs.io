<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Return the home page.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $latest_release = null;

        try {
            if (app()->environment('production')) {
                $client = new Client();
                $endpoint = 'https://api.github.com/repos/cnvs/canvas/releases/latest';

                $request = $client->get($endpoint);

                $response = json_decode($request->getBody()->getContents());

                $latest_release = $response->tag_name;
            }
        } catch (Exception $e) {
            logger()->error($e->getMessage());
        }

        return view('app', compact('latest_release'));
    }
}
