<?php

namespace App\Http\Controllers;

use App\Models\Page;

class MainController extends Controller
{
    public function index(){

        $pages = Page::first();
        return view('app.main', [
            'pages' => $pages
        ]);
    }

    public function page($slug)
    {
        $pages = Page::all()->where('slug',$slug)->first();
        return view('app.page', [
            'pages' => $pages
        ]);
    }

    public function child()
    {
        $pages = Page::all()->where('id', 18)->first();
        return view('app.child', compact('pages'));
    }

}
