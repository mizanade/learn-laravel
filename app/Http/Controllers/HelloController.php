<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index (){
        echo "hello";
    }

    function world_message(){
        echo "world";
    }
}
