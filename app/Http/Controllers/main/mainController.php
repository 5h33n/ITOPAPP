<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
class mainController extends Controller
{
    public function index(){
        return view ('main.main');
    }
}
