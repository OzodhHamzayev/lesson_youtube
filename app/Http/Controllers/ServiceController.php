<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use App\Services\ServiceServices;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::query()->get();
        return view('service', compact('services'));
    }
}