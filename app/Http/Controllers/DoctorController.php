<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('app.doctors.index', compact('doctors'));
    }

    public function more($slug)
    {
        $doctors = Doctor::all()->where('slug', $slug)->first();
        return view('app.doctors.doctors', compact('doctors'));
    }
}
