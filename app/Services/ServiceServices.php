<?php

namespace App\Services;

use App\Models\Service;


class ServiceServices{

    public function Service(){
        $service = Service::query()->inRandomOrder()->first();
        return view('home', [compact('service')]);
    }
    public function a(){
        
    }
}