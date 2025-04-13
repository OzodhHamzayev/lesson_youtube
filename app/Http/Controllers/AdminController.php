<?php

namespace App\Http\Controllers;

use App\Services\Admin\AdminServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * @var \App\Services\Admin\AdminServices
     */
    protected $adminServices;

    /**
     * @param \App\Services\Admin\AdminServices $adminServices
     */
    public function __construct(AdminServices $adminServices)
    {
        $this->adminServices = $adminServices;
    }
    public function asd(){}

}