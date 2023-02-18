<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index() {
        return view('home_page');
    }
}
