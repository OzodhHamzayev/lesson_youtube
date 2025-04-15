<?php

namespace App\Http\Controllers;

use App\Models\Employees;


class EmployeesController extends Controller
{
    public function employeeShow()
    {
        return view('show.employees');
    }
    public function employeesShow($slug)
    {
        $employee = Employees::query()->where('slug', $slug)->firstOrFail();
        if ($employee) {
            return redirect()->route('employees.show');
        }
        return view('show.employees', ['employee' => $employee]);
    }
}