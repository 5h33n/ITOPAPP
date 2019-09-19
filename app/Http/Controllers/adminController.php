<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
class adminController extends Controller
{
    public function index(){
        if (Auth::User()->tipo == 1){
            return redirect ('/');
        }else if (Auth::User()->tipo == 2){
            return view('admin.index');
        }
    }
}
