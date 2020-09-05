<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
#2
Route::get('/welcome', function () {
    return view('welcome');
});
#3 
# you can return with a text rather than a view 
Route::get('/hello', function () {
    return "Hello World";
});

# 4 return with an array 
Route::get('/array', function () {
    return ['course'=>"Laravel"];
});
# 5 go to /resources/views and create a page for test
Route::get('/test', function () {
    return view('test');
});


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/about', function () {
//     return view('about');
// });

#lets replace the view with that much cleaner

Route::view('about', 'about');
#------------------------------------------
#6 request data
// Route::get('/reqVar', function () {
//     $name= request('name');
//     return $name;
// });

#7 pass some data 
// Route::get('/reqVar', function () {
//     // $name= request('name');
//     // return view('reqVar',[
//     //     'name'=>$name
//     // ]);
//     # or 
//     return view('reqVar',[
//         'name'=>request('name')
//     ]);
// });

// Route::get('/customers', function () {
//     #6- let's create a dataset
//     $customers =[
//         'Noha Shehab', 
//         'Omar', 
//         'Sara',
//     ]; 
//     # let's pass it to the view
//     return view('internals.customers',[
//         'customers'=> $customers
//     ]);
// });

# 7- use the controller

Route::get('/customers','CustomersController@list');

#8- create home page to route to check the nav
Route::view('/home','home');

# creating a wild card

#first returning wiht a value directly 
// Route::get('/post/{post}', function ($post) {
//     return $post;
// });


Route::get('/post/{post}', 'PostsController@show');






