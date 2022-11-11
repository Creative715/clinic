<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::allPaginate(12);
        return view('app.news.index', compact('news'));
    }

    public function more($slug)
    {
        $news = News::all()->where('slug', $slug)->first();
        return view('app.news.news', compact('news'));
    }
}
