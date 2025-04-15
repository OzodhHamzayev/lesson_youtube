<?php

namespace App\Services;

use App\Models\Contact;
use App\Models\Employees;
use App\Models\Service;



class HomeServices
{

    /**
     * @return array
     */

    public function home()
    {
        return [
            'service' => Service::query()->inRandomOrder()->take(1)->get(),
            'contact' => Contact::query()->get(),
            'employees' => Employees::query()->take(5)->get(),
        ];
    }

}