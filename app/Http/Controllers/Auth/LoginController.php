<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => 'admin']);
    }
    public function login(){
        
        $credentials = $this->validate(request(),[
           'usuario' => 'required|string',
            'password' => 'required|string',
        ]);
        if(Auth::attempt($credentials)){
            $tipo = Auth::User()->tipo;
            if($tipo == 1){
                return redirect('/');
            }else{
                Auth::logout();
                return back()->withErrors(['usuario'=> 'El usuario no existe',
                                       'tipo' => ''. $_POST['tipo'] .''])->withInput(request(['usuario']));
            }
        }else{
            return back()->withErrors(['usuario'=> 'El usuario no existe',
                                       'tipo' => ''. $_POST['tipo'] .''])->withInput(request(['usuario']));
        }
        
        
    }
    public function loginA(){
        $credentials = $this->validate(request(),[
           'usuario' => 'required|string',
            'password' => 'required|string',
        ]);
        if(Auth::attempt($credentials)){
            $tipo = Auth::User()->tipo;
            if($tipo == 2){
                return redirect('admin');
            }else{
                Auth::logout();
                return back()->withErrors(['usuario'=> 'El usuario no existe',
                                       'tipo' => ''. $_POST['tipo'] .''])->withInput(request(['usuario']));
            }
        }else{
            return back()->withErrors(['usuario'=> 'El usuario no existe',
                                       'tipo' => ''. $_POST['tipo'] .''])->withInput(request(['usuario']));
        }
    }
    public function showLoginForm(){
        /*
        $tipo = Auth::User();
        $cat = DB::table('categoria')->where('estado','1')->get();
        $info = array();
        foreach($cat as $el){
            $productos = DB::table('producto')->where('estado','1')->where('id_subcategoria',$el->id_categoria)->get();
            array_push($info,array($el->nombre => $productos) );
        }
        
        if($tipo != null){
             $car = DB::table('compra')->where('usuario',$tipo->usuario)->where('pagado',0)->get();
            if($tipo->tipo == 1){
                return view ('cliente.index')->with(['productos'=>$info,'compras'=>sizeof($car)]);
            }else if($tipo->tipo == 2){
                return view ('admin.dashboard-c');
            }else{
                return view('public.index');
            }
        }else{
            return view ('public.index');
        }
        */
        $id_pape=1;
        $tipo = Auth::User();
        if($tipo != null){
             $pape = DB::table('papeleria')->where('estado','1')->where('id_papeleria',$id_pape)->take(1)->first();
            if($tipo->tipo == 1){
                $cliente = DB::table('clientes')->where('usuario', $tipo->usuario)->where('id_papeleria',$id_pape)->where('estado','1')->take(1)->first();
                return view ('cliente.index')->with(['mipape'=>$pape,'cliente'=>$cliente]);
            }else if($tipo->tipo == 2){
                $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
                return view ('admin.dashboard-c')->with(['mipape'=>$pape,'administrador'=>$admin]);
            }else{
                return view('public.index');
            }
        }else{
            return view ('public.index');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function admin(){
        $tipo = Auth::User();
        if (Auth::User()->tipo == 1){
            echo "No tiene permisos para acceder a esta vista";
        }else{
            $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
            return view('admin.dashboard-c')->with('administrador',$admin);
        }
    }
}
