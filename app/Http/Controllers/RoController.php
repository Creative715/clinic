<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Pagero;

class RoController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all()->take(3);
        $pageros = Pagero::all()->first();
        return view('app.ro', [
            'pageros' => $pageros,
            'doctors' => $doctors
        ]);
    }

    public function pagero($slug)
    {
        $pageros = Pagero::all()->where('slug', $slug)->first();
        return view('app.pagero', compact('pageros'));
    }
}
