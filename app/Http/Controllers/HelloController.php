<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $variable = 'hello from here';
        $name = 'John';
        return view('hello',
            $data = [
                'test' => $variable
            ]);
    }
}
