<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employees;
use App\Models\Service;
use App\Services\HomeServices;

class HomeController extends Controller
{
    public function index()
    {
        $service = Service::query()->inRandomOrder()->take(1)->get();
        $contact = Contact::query()->get();
        $employees = Employees::query()->take(4)->get();
        return view('home', compact(['service', 'contact', 'employees']));
    }
}