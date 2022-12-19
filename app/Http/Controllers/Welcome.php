<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    
    function welcomeUser(){
        return "Hello! The whole company welcomes you, and we look forward to a successful journey with you! Welcome aboard!";
    }

}
