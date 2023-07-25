<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class welcomecontroller extends Controller
{
    public function index(): View
    {
        $title = 'charles  ';
        $title1 = ' steve  ';
        return view('vue1', compact('title', 'title1'));
    }
}
