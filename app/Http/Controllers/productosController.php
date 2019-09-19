<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class productosController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });
    }
    public function index($id){
        
        $info = DB::table('producto')->where('estado','1')->where('id_producto',$id)->get()->take(1)->first();
        
            $car = DB::table('compra')->where('usuario','Sheen')->where('pagado',0)->get();
            if(1 == 1){
                return view ('cliente.producto')->with(['producto'=>$info,'compras'=>sizeof($car)]);
            }else if($this->user->tipo ==2){
                return view('admin.producto')->with('producto',$info);
            }else{
                return view('public.producto')->with('producto',$info);
            }

    }
    public function addCarrito(Request $request){
        
        $id = $request->id;
        $cantidad = $request->cantidad;
        $usuario = "Sheen";
        $abr = DB::table('compra')->select('id_compra')->where("usuario",$usuario)->where('pagado','0')->get();
        $n_producto = DB::table('producto')->select('n_producto')->where('id_producto',$id)->get()->take(1)->first();
        $actualizado = true;
        if(empty($abr[0])){
            $id_detalle = DB::table('compra')->insertGetId(
                ['usuario' => $usuario,]
            );

            DB::table('detalle_compra')->insert(
                ['id_compra' => $id_detalle,
                 'n_producto' => $n_producto->n_producto,
                 'cantidad' => $cantidad]
            );
                
        }else{
            
            $temporal = DB::table('detalle_compra')->where('id_compra',$abr[0]->id_compra)->get()->take(1)->first();
            if($temporal == null){
                echo "a";
            }else{
                var_dump($temporal);
                var_dump($n_producto);
                if($temporal->n_producto == $n_producto->n_producto){
                    DB::table('detalle_compra')
                        ->where('n_producto', $n_producto->n_producto)
                        ->where('id_compra',$abr[0]->id_compra)
                        ->increment('cantidad', $cantidad);
                $actualizado = false;
                }
            }
            if($actualizado){
                    DB::table('detalle_compra')->insert(
                        ['id_compra' => $abr[0]->id_compra,
                         'n_producto' => $n_producto->n_producto,
                         'cantidad' => $cantidad]
                    );
            }
        }


    exit;
    }
    public function infoProducto($n_producto){
        $d = DB::table('producto')->where('n_producto',$n_producto)->get()->take(1)->first();
        
        return response()->json(array('success' => true, 'data' => $d));
    }
    public function decrementar($id){
        DB::table('detalle_compra')
                        ->where('id_compra',$id)
                        ->decrement('cantidad', 1);
        return response()->json(array('success' => true, 'data' => 'sobres'));
    }
    public function incrementar($id){
        DB::table('detalle_compra')
                        ->where('id_compra',$id)
                        ->increment('cantidad', 1);
        return response()->json(array('success' => true, 'data' => 'sobres'));
    }
}
