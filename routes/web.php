<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// this file is where we define all of the routes our app will respond to

// Route::get('/', function () {
//     // the '/' represents the home route
//     return view('welcome');
// });

// use App\Http\Controllers\CustomersController;
// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});

// since creating views is something that'll most likely be done most of the time, we have a shorthand syntax shown below.
Route::view('about', 'about');

// we can pass in data to views, but note that the shorthand Routing syntax is not the most efficient way to do that. it's better to do this with the normal Routing syntax. example below:

Route::get('customers', 'CustomersController@list');

// worth knowing is the fact that views can also be in folders...as long as they are in laravel's views directory and they're referenced correctly using the dot or slash notation here in the web routes

// note that ideally, it isnt right for logic to be inside the web.php file. what we should use is something called a controller. controllers are the classes that are in charge of the grunt work of preparing the data to pass to the views. they orchestrate the whole operation

// below i'm creating a new POST route for the form since, typically forms use a post method. so i create the POST route, and send it to the CustomerController to run a particular function say store for example

Route::post('customers', 'CustomersController@store');
Route::post('customers', 'CustomersController@store');