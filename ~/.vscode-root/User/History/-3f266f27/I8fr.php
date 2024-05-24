<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            ['price' => '10000', 'tax' => 500, 'active' => true ],
            ['price' => '20000', 'tax' => 700, 'active' => false ],
            ['price' => '30000', 'tax' => 900, 'active' => true ],
        ];
        return collect($data)->average(function($value) {
        });
    }
}
