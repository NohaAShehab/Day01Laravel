<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //

    public function list(){
        $customers =[
            'Noha Shehab', 
            'Omar', 
            'Sara',
            'lala'
        ]; 
        # let's pass it to the view
        return view('internals.customers',[
            'customers'=> $customers
        ]);
    }
}
