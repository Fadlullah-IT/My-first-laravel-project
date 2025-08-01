<?php


// This line tells PHP we're using Laravel's Route functions

use Illuminate\Support\Facades\Route;



// HOME PAGE ROUTE
// When someone visits "/" (The website root), show the "home" view

Route::get('/', function () {
    return view('home');
});



// ABOUT PAGE ROUTE  
// When someone visits "/about", show the "about" view with some data

Route::get('/about', function () {
    $name = 'Fadlullah Banu';
    $age = 24;
    return view('about', compact('name', 'age')); // Send variables to the view
});

// CONTACT PAGE ROUTE (GET - to show the form)
// When someone visits "/contact", show the contact form
Route::get('/contact', function () {
    return view('contact');
});



// CONTACT FORM SUBMISSION ROUTE (POST - to handle form)
// When someone submits the contact form, show a thank you message


Route::post('/contact', function () {
    return back()->with('message', 'Thanks for your message!');
});
