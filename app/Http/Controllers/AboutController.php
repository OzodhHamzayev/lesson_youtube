<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Service;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $service = Service::query()->take(2)->get();
        $employee = Employees::query()->take(value: 4)->get();
        return view('about', compact(['service', 'employee']));
    }
    public function employeeShow(string $slug)
    {
        $employee = Employees::query()->where('slug', $slug)->first();
        if ($employee) {

            return view('show.employees', compact('employee'));

        } elseif ($employee) {
            return redirect()->route('about.index');
            // abort(404);

        }
    }
    public function serviceShow(int $id)
    {
        $service = Service::query()->where('id', $id)->first();
        if ($service) {

            return view('show.employees', compact('employee'));

        } elseif ($service) {
            return redirect()->route('about.index');
        }
    }
}