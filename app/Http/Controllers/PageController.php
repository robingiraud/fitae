<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function offrePrepa()
    {
        return view('offre-prepa');
    }

    public function offreClub()
    {
        return view('offre-club');
    }
}
