<?php

namespace App\Services;

use App\Models\Service;



class AdminServices
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
           'service' => Service::count(),
        ];
    }
}