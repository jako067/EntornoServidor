<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers =Customer::get();
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        $customer= new Customer();
        $customer->active=$request->input('active')==1;
        $customer->name=$request->input('name');
        $customer->email=$request->input('email');
        $customer->surname1=$request->input('surname1');
        $customer->surname2=$request->input('surname2');
        $customer->dni=$request->input('dni');
        $customer->save();
        return (redirect()->route('customer.show',$customer));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function book():View
    {
        $customers =Customer::get();
        $spaces =Space::get();
        return view('customer.book',compact('spaces'),compact('customers'));
    }

        public function bookStore(Request $request)
    {
        $book= new Customer();
//por rellenar
        $book->save();
        return (redirect()->route('customer.show',$book));
    }
}
