<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $pages_count = Page::all()->count();

        $cat_count = Category::all()->count();

        return view('admin.home.index', [
            'pages_count' => $pages_count,
            'cat_count' => $cat_count
        ]);
    }
}
