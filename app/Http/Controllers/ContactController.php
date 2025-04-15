<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function contactMain(){
        $contact = Contact::query()->first();
        dd('sdad');
        return view('layouts.main', compact('contact'));
    }
}