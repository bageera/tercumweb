<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function robots(): Response {
        return response(
            "User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml'),
            200,
            ['Content-Type' => 'text/plain']
        );
    }

    public function sitemap(): Response {
        $locales = ['en','es','fr'];
        $paths = ['','about','services','industries','projects','blog','contact','privacy','terms'];

        $urls = [];
        foreach ($locales as $l) {
            foreach ($paths as $p) {
                $urls[] = url("/$l/$p");
            }
        }

        return response()->view('seo.sitemap', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}
