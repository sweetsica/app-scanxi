<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectController extends Controller
{
    public function index(){
        return view('front-end.index');
    }
}
