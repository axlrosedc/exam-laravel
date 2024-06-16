<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function index()
    {
      $customers = Customer::all();
      return view('customers.index', compact('customers'));
    }

    public function store(Request $request)
    {
      $request->validate([
        'first_name' => 'required|max:50',
        'last_name'  => 'required|max:50',
        'age'        => 'required|max:3',
        'email'      => 'required|max:50',
        'dob'      => 'required',
      ]);
      Customer::create($request->all());
      return redirect()->route('customers.index')
        ->with('success', 'Customer created successfully.');
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'first_name' => 'required|max:50',
        'last_name'  => 'required|max:50',
        'age'        => 'required|max:3',
        'email'      => 'required|max:50',
        'dob'      => 'required',
      ]);
      $customer = Customer::find($id);
      $customer->update($request->all());
      return redirect()->route('customers.index')
        ->with('success', 'Customer updated successfully.');
    }
    public function destroy($id)
    {
      $customer = Customer::find($id);
      $customer->delete();
      return redirect()->route('customers.index')
        ->with('success', 'Customer deleted successfully');
    }
    public function create()
    {
      return view('customers.create');
    }
    public function show($id)
    {
      $customer = Customer::find($id);
      return view('customers.show', compact('customer'));
    }
    public function edit($id)
    {
      $customer = Customer::find($id);
      return view('customers.edit', compact('customer'));
    }
}
