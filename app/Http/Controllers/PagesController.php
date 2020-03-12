<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home - index
    public function home() {
        return view('pages.home');
    }

    // About
    public function about() {
        return view('pages.about');
    }
}
