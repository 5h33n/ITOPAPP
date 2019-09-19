<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
class clienteController extends Controller
{
    public function index(){
        $car = DB::table('compra')->where('usuario',Auth::User()->usuario)->where('pagado',0)->get();
        $datos = DB::table('detalle_compra')->join('compra', 'detalle_compra.id_compra', '=', 'compra.id_compra')->where('compra.pagado','0')->get();
        return view ('cliente.carrito')->with(['datos'=>$datos,'compras'=>sizeof($car)]);
    }
     public function pagar1(){
         $id = DB::table('compra')->where('compra.pagado','0')->value('id_compra');
       
          return redirect()->to('paga2/'.$id);
    }
    public function pagar2($id){
         
          DB::table('compra')
            ->where('id_compra', $id)
            ->update(['pagado' => 1]);
          return redirect()->to('carrito');
    }
    public function enviarcorreo($data){
        // Datos del email
    }
    public function sendMail(){
        $msg = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'compania' => $_POST['compania'],
            'mensaje' => $_POST['mensaje']
        );
        $to_name = 'Administrador';
        $to_email = 'itopapp.contacto@gmail.com';
        $from = $msg['email'];
        Mail::send('mensaje', $msg, function($message) use ($to_name, $to_email,$from) {
            $message->to($to_email, $to_name)
                    ->subject('Solicitud de contacto');
            $message->from($from,'Solicitante');
        });
        return "<script>alert('Mensaje enviado correctamente');window.location='http://127.0.0.1:8000/';</script>";
        
            
    }
}