<?php

namespace App\Http\Controllers;

use App\Models\Pagero;

class RoController extends Controller
{
    public function index()
    {
        $pageros = Pagero::all()->first();
        return view('app.ro', compact('pageros'));
    }

    public function pagero($slug)
    {
        $pageros = Pagero::all()->where('slug', $slug)->first();
        return view('app.pagero', compact('pageros'));
    }
}
