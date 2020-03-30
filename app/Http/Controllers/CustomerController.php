<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class CustomerController extends Controller
{
    public function index(Request $request) 
    {
        // $customers = Customer::all();
        $customers = Customer::where('active', $request->query('active', 1))->get();
        return view('customer.index', compact('customers'));
    }

    public function create() 
    {
        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }

    public function store() 
    {
        // $data = request()->validate([
        //     'name' => 'required',
        //     'email' => 'required|email'
        // ]);

        $customer = Customer::create($this->validateData());   
        Mail::to($customer->email)->send(new WelcomeMail());
        return redirect('/customers/'.$customer->id); 
    }
 
    public function show(Customer $customer) 
    {
        // $customer =Customer::findOrFail($customerId); 

        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer) 
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer) 
    {
        // $data = request()->validate([
        //     'name' => 'required',
        //     'email' => 'required|email'
        // ]);

        $customer->update($this->validateData());

        return redirect('/customers'); 
    }

    public function destroy(Customer $customer) 
    {
        $customer->delete();
        return redirect('/customers ');
    }

    protected function validateData() 
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

    }
    
}
