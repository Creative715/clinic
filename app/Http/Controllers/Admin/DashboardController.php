<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\News;
use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $doctors_count = Doctor::all()->count();
        $pages_count = Page::all()->count();
        $cat_count = Category::all()->count();
        $news_count = News::all()->count();
        $testimonials_count = Testimonial::all()->count();


        return view('admin.home.index', [
            'doctors_count' => $doctors_count,
            'pages_count' => $pages_count,
            'cat_count' => $cat_count,
            'news_count' => $news_count,
            'testimonials_count' => $testimonials_count
        ]);
    }
}
