<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class carritoController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });
    }
    
    public function getNElementosCarrito($id){
        $n_elementos = DB::table('carrito')
                        ->select(DB::raw('count(*) as elementos'))
                        ->where('id_cliente',$id)->take(1)->first();
        return response()->json(array('success' => true, 'data' => $n_elementos));
    }
}
