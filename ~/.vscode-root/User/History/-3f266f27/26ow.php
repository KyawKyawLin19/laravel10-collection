<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            {'price' => '10000', 'tax' => 500},
            {'price' => '20000', 'tax' => 700},
            {'price' => '30000', 'tax' => 900},
        ];
        return collect($data)->average(function($value) {
            return $value['price'] + $value['tax'];
        });
    }
}
