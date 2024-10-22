<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    //

    public function formation()
    {
        return view('formatheque.formation');
    }public function ebooks()
    {
        return view('formatheque.ebooks'); // Vue pour les E-books
    }

}
