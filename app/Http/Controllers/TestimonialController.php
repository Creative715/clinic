<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::allPaginate(8);
        return view('app.testimonial.index', compact('testimonials'));
    }

    public function more($slug)
    {
        $testimonials = Testimonial::all()->where('slug', $slug)->first();
        return view('app.testimonial.testimonial', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->body = $request->body;
        $testimonial->slug = $request->slug;
        $testimonial->save();

        return back()->withSuccess(('Дякуємо за відгук!'));
    }
}
