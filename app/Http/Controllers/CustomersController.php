<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // this function list is handling how we're getting the customer list from the database

    public function list()
    {
        // $customers = ['John Doe', 'Jane Doe', 'Bob The Builder', 'Another Random Name'];

        // notice that customers were being hard coded above; but now i want them to dynamically served from the database below

        $customers = Customer::all();

        // if i want to preview what i'm actually getting back from this request, i can simply just run

        // dd($customers);

        

        return view('internals.customers', ['customers' => $customers]);
    }

    // this function store is handling how we're posting the customers to the database
    
    public function store()
    {
        // dd(request('customer-name')); // this is simply just returning the request. it's not saving the data yet
        
        // validate request. we simply pass the result of the request into a variable and we say $variableName = request()->validate([then pass in an array of the fields that we need to be required]). doing this only just makes the page go out, try to post the data to the database, sees that the input field is empty, reloads the page, and then comes back there. also note that this below, doesn't actually display any error messages. it only just reloads the page without blowing up and also without posting anything to the database. if we want actual feedback(error messages), we have to do that ourselves.

        $data = request()->validate([
            'customer-name' => 'required|min:5', // the |min:5 simply just makes sure the characters input is at least 5
            'customer-email' => 'required|email'
        ]);

        // long method
        $customer = new Customer();
        $customer->name = request('customer-name'); // here we're setting the name in the database to whatever name the user has provided in the form input field. but we notice that when we load up the page in the browser, and just click on add customer the page blows up because we need to actually validate that the user has actually passed in a name in the input field. we're adding a layer of validation at the top
        $customer->email = request('customer-email');
        $customer->save();

        return back();   
    }
}