<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * View the latest published full release for the repository.
     *
     * @const string
     */
    const CANVAS_RELEASES = 'https://api.github.com/repos/cnvs/canvas/releases/latest';

    /**
     * Return the landing page.
     *
     * @param null $latest_release
     * @return View
     */
    public function __invoke($latest_release = null): View
    {
        try {
            if ($this->isInProduction()) {

                // Create a new Client instance
                $client = new Client();

                // Make a GET request to the Github API
                $request = $client->get(self::CANVAS_RELEASES);

                // Decode the response and get the contents
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
