<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    protected array $projects = [
        [
            'slug' => 'global-expansion',
            'title' => 'projects.global.title',
            'summary' => 'projects.global.summary',
        ],
        [
            'slug' => 'secure-platform',
            'title' => 'projects.secure.title',
            'summary' => 'projects.secure.summary',
        ],
    ];

    public function home(): View {
        return view('pages.home');
    }

    public function about(): View {
        return view('pages.about');
    }

    public function services(): View {
        return view('pages.services');
    }

    public function industries(): View {
        return view('pages.industries');
    }

    public function projects(): View {
        return view('pages.projects', ['projects' => $this->projects]);
    }

    public function project(string $slug): View {
        $project = collect($this->projects)->firstWhere('slug', $slug);
        abort_if(!$project, 404);
        return view('pages.project', compact('project'));
    }

    public function blog(): View {
        return view('pages.blog');
    }

    public function privacy(): View {
        return view('pages.privacy');
    }

    public function terms(): View {
        return view('pages.terms');
    }
}
