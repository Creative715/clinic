<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page;
use App\Models\Testimonial;

class MainController extends Controller
{
    function index()
    {
        $pages = Page::first();
        $news = News::latest()->limit(3)->get();
        $testimonials = Testimonial::latest()->limit(3)->get();
        return view('app.main', [
            'pages' => $pages,
            'news' => $news,
            'testimonials' => $testimonials
        ]);
    }

    public function page($slug)
    {
        $pages = Page::all()->where('slug', $slug)->first();
        return view('app.page', compact('pages'));
    }


    public function child()
    {
        $pages = Page::all()->where('id', 18)->first();
        return view('app.child', compact('pages'));
    }
}
