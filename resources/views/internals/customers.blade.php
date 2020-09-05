<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <body> -->
    <!-- blade -->
    <!--  6 make navigation accross pages -->
    <!-- <ul>
        <li> <a href="/"> Home </a> </li>
        <li> <a href="/about">About Us</a> </li>
        <li> <a href="/contact"> Contact us</a></li>
        <li> <a href="/customers"> Customers</a></li>
    </ul> -->



    <!-- <h1> Customers </h1> -->
    <!-- <h1> Customer 1 </h1>
    <h1> Customer 2 </h1>
    <h1> Customer 3 </h1>
    <h1> Customer 4 </h1> -->
    <!-- <?php
        // foreach($customers as $customer){
        //     echo "<li>". $customer. "</li>" ;
        // }

    ?>  -->

     <!-- use blade syntax foreach -->
    <!-- <h1> More cleaner Style </h1>
    <h2> Customers </h2> -->
    <!-- more cleaner syntax -->
    <!-- @foreach ($customers as $customer)
        <li> {{$customer}} </li>
    @endforeach -->
<!-- 
</body> -->

    <!-- Body after using the layout -->
    <body>
            @extends('layout')
            @section('content')
                @foreach ($customers as $customer)
                    <li> {{$customer}} </li>
                @endforeach

            @endsection

    </body>

</html>