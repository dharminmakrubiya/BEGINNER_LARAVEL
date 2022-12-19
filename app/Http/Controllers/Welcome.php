<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{

    public function index()
    {
        $data = [
            'ProductOne'    =>  'Iphone',
            'ProductTwo'    =>  'Samsung',
            'ProductThree'  =>  'OnePlus'
        ];

        // echo '<pre>';
        // print_r($data);
        // die;

        return view('products',['data'   => $data]);
    }

    public function welcomeUser(){
        return "Hello! The whole company welcomes you, and we look forward to a successful journey with you! Welcome aboard!";
    }

    public function showProductList($id)
    {
        
    }

}
