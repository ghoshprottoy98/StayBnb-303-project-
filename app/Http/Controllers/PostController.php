<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{
    

    public function viewPage(){

        return view('host');
    }

    public function store(){
        return view('welcome');
    }

}
