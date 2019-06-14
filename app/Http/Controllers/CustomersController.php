<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        // $activeCustomers=Customer::where('active',1)->get();
        // $inactiveCustomers=Customer::where('active',0)->get();
        // $customers= Customer::all();
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies=Company::all();

        //    dd($activeCustomers);

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers','companies'));
        // return view('internals.customers',[
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers,
        // ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
        ]);


        Customer::create($data);
        // $customer = new Customer();
        // $customer->name=request('name');
        // $customer->email=request('email');
        // $customer->active=request('active');
        // $customer->save();
        // dd(request('name'));
        return back();
    }
}
