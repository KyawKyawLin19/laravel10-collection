<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            10000,
            20000,
            30000,
            40000
        ];
    }
}
