<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Locale;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return the home page.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        try {
            if (app()->environment('production')) {
                $tagName = Http::get('https://api.github.com/repos/cnvs/canvas/releases/latest')['tag_name'];
            }
        } catch (Exception $e) {
            logger()->error($e->getMessage());
        }

        return view('app')->with([
            'languageCodes' => $this->getAvailableLanguageCodes(),
            'release' => $tagName ?? null,
        ]);
    }

    /**
     * Return the available locales.
     *
     * @return array
     */
    private function getAvailableLanguageCodes()
    {
        $locales = preg_grep('/^([^.])/', scandir(dirname(__DIR__, 3) . '/resources/lang'));
        $translations = collect();

        foreach ($locales as $locale) {
            $translations->put($locale, Str::ucfirst(Locale::getDisplayName($locale, $locale)));
        }

        return $translations->toArray();
    }
}
