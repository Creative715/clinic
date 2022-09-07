<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $pages = Page::first();

        return view('main', [
            'pages' => $pages
        ]);
    }
}
