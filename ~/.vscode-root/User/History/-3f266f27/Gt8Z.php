<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            ['price' => '10000'],
            ['price' => '20000'],
            ['price' => '30000'],
        ];
        return collect($data)->average();
    }
}
