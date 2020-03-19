<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // $services = [
        //     'Service One',
        //     'Service 2',
        //     'Service 3',
        //     'Service 4'
        // ];

        $services = \App\Service::all();

        // dd($services);

        return view('service.index', compact('services'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:5|max:10'
        ]);

        $service = new \App\Service();

        $service->name = request('name');
        $service->save();

        return redirect()->back();
    }
}
