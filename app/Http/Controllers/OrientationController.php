<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrientationController extends Controller
{
    //

    public function scolaire()
    {
        return view('orientations.Scolaire');
    }

    public function universite()
    {
        return view('orientations.universite');
    }

    public function postbac()
    {
        return view('orientations.postbac');
    }

    public function professionnelle()
    {
        return view('orientations.professionnelle');
    }

    public function toutvie()
    {
        return view('orientations.toutvie');
    }
}
