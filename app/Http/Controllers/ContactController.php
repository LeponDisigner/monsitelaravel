<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request): View
    {
        Mail::to('leponkouocharlesdonfack@gmail.com')
        ->send(new Contact($request->except('_token')));
        
        return view('confirm');
    }
}
