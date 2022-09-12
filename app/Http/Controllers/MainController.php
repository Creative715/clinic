<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

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
        return view('app.page',
        [
            'pages' => $pages
        ]);
    }

}
