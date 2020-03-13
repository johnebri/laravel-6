<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = [
            'Service One',
            'Service 2',
            'Service 3',
            'Service 4'
        ];
        return view('services', compact('services'));
    }
}
