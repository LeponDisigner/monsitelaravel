<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class userscontroller extends Controller
{
    public function create(): View
    {
        return view('infos');
    }
 
    public function store(Request $request): string
    {
        return 'Le nom est ' . $request->input('nom');
    }
}
