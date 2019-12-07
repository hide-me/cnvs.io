<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $dir = scandir(sprintf('%s/resources/lang/', dirname(__DIR__, 3)));

        try {
            if ($this->isInProduction()) {
                $client = new Client();
                $endpoint = 'https://api.github.com/repos/cnvs/canvas/releases/latest';

                $request = $client->get($endpoint);

                $response = json_decode($request->getBody()->getContents());

                $latest_release = $response->tag_name;
            }
        } catch (Exception $e) {
            logger()->error($e->getMessage());
        }

        return view('welcome', compact('latest_release'));
    }

    /**
     * Check if the application is in production.
     *
     * @param string $environment
     * @return bool
     */
    private function isInProduction(string $environment = 'production'): bool
    {
        return app()->environment() == $environment;
    }
}
