<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class papeleriaController extends Controller
{
    public function comprobar(){
        if (Auth::User()->tipo == 1){
            echo "No tiene permisos para acceder a esta vista";
            return False;
        }else{
            return True;
        }
    }
    public function info(){
        $tipo = Auth::User();
        $id_papeleria = 1;
        $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
        $papeleria = DB::table('papeleria')->where('id_papeleria',$id_papeleria)->get()->take(1)->first();
        $path = "http://127.0.0.1:8000/info/paps/01/about.txt";
        $about="";
        $mision ="";
        $vision = "";
        $historia = "";
        $a = fopen(public_path()."/".$papeleria->about,'r');
        $m = fopen(public_path()."/".$papeleria->mision,'r');
        $v = fopen(public_path()."/".$papeleria->vision,'r');
        $h = fopen(public_path()."/".$papeleria->historia,'r');
        while(!feof($a)){
            $about = $about.fgets($a);
        }
        fclose($a);
        while(!feof($m)){
            $mision = $mision.fgets($m);
        }
        fclose($m);
        while(!feof($v)){
            $vision = $vision.fgets($v);
        }
        fclose($v);
        while(!feof($h)){
            $historia = $historia.fgets($h);
        }
        fclose($h);
        if ($this->comprobar()){
            return view ('admin.informacion')->with(['data_pape'=>$papeleria,'administrador'=>$admin,
                                                     'about'=>utf8_encode($about),
                                                     'mision'=>utf8_encode($mision),
                                                     'vision'=>utf8_encode($vision),
                                                     'historia'=>utf8_encode($historia)]);
        }
    }
    public function designWeb(){
        $tipo = Auth::User();
        $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
        $id_papeleria = 1;
        if ($this->comprobar()){
            return view ('admin.disenioWeb')->with(['administrador'=>$admin]);
        }
    }
    public function designApp(){
        $file = public_path("qr.png");
        \QRCode::text('192.168.43.40')->setOutfile($file)->png();
        $tipo = Auth::User();
        $id_papeleria = 1;
        if ($this->comprobar()){
            $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
            return view ('admin.disenioApp')->with(['administrador'=>$admin]);
        }
    }
    public function categorias(){
        $tipo = Auth::User();
        $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
        $id_papeleria = 1;
        if ($this->comprobar()){
            $categorias = DB::table('categoria')->where('estado','1')->where('id_papeleria',$id_papeleria)->get();
            return view ('admin.categorias')->with(['administrador'=>$admin,'categorias'=>$categorias]);
        }
    }
    public function editCategorias(){
        $tipo = Auth::User();
        $id_papeleria = 1;
        if ($this->comprobar()){
            
            $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
            $categorias = DB::table('categoria')->where('estado','1');
            $subcategorias = DB::table('subcategoria')->where('estado','1');
            return view ('admin.editCategorias')->with(['cat'=>$categorias,'subcat'=>$subcategorias,'administrador'=>$admin]);
        }
    }
    public function inventario(){
        $tipo = Auth::User();
        $id_papeleria = 1;
        if ($this->comprobar()){
            $admin = DB::table('administrador')->where('usuario', $tipo->usuario)->where('estado','1')->take(1)->first();
            $productos = DB::table('producto')
                ->select('producto.id_producto','producto.n_producto','producto.descripcion','producto.precio_unitario','producto.cantidad','subcategoria.nombre as sub','proveedor.nombre')
                ->join('proveedor','producto.id_proveedor','=','proveedor.id_proveedor')
                ->join('subcategoria','subcategoria.id_subcategoria','=','producto.id_subcategoria')
                ->where('producto.estado','1')
                ->orderBy('producto.id_producto','ASC')
                ->paginate(5);
            $proveedores = DB::table('proveedor')->orderBy('id_proveedor','ASC')->paginate(5);
            return view ('admin.inventario')->with(['productos'=>$productos,'proveedores'=>$proveedores,'administrador'=>$admin]);
        }
    }

    public function ventas(){
        if ($this->comprobar()){
            $ventas = DB::table('detalle_compra')
                ->select('detalle_compra.id_compra','detalle_compra.n_producto','detalle_compra.fecha_agregado','compra.fecha_pagado','detalle_compra.cantidad','compra.pagado','producto.precio_unitario','compra.usuario')
                ->join('producto','producto.n_producto','=','detalle_compra.n_producto')
                ->join('compra','compra.id_compra','=','detalle_compra.id_compra')
                ->orderBy('detalle_compra.id_compra','ASC')
                ->paginate(5);
            return view ('admin.ventas')->with('ventas',$ventas);
        }
    }
    public function index(){
        if ($this->comprobar()){
            return view ('admin.index');
        }
    }
    public function saveLogo(Request $request){
        $id_papeleria= 1;
        if ($request->file('file')){
            $image = $request->file('file');
            $input['imagename'] = time() . "_" .$id_papeleria .".". $image->getClientOriginalExtension();
            $path = public_path('/img/papelerias');
            $image->move($path,$input['imagename']);
            $papeleria = DB::table('papeleria')->where('id_papeleria',$id_papeleria)->get()->take(1)->first();
            unlink(public_path('/img')."/".$papeleria->logo);
            DB::table('papeleria')->where('id_papeleria',$id_papeleria)->update(['logo' =>'papelerias/'.$input['imagename']]);
            return response()->json(['success'=>'¡DATOS ACTUALIZADOS CORRECTAMENTE!']);
        }
        return response()->json(['success'=>'¡NEL!']);
        
    }
    public function guardarConfig(Request $request){
        $id_papeleria=1;
        $papeleria = DB::table('papeleria')->where('id_papeleria',$id_papeleria)->get()->take(1)->first();
        
        $a = fopen(public_path()."/".$papeleria->about,'w');
        $m = fopen(public_path()."/".$papeleria->mision,'w');
        $v = fopen(public_path()."/".$papeleria->vision,'w');
        //$h = fopen(public_path()."/".$papeleria->historia,'w');
        fwrite($a,utf8_decode($request->about));
        fclose($a);
        fwrite($m,utf8_decode($request->mision));
        fclose($m);
        fwrite($v,utf8_decode($request->vision));
        fclose($v);
        //fwrite($h,$request->historia);

        DB::table('papeleria')->where('id_papeleria',$id_papeleria)->update(['nombre' =>$request->nombre,'detonadora'=>$request->detonadora,'correo'=>$request->correo,'telefono'=>$request->telefono,'direccion'=>$request->direccion,'facebook'=>$request->fb,'instagram'=>$request->ig,'twitter'=>$request->tw,'otra'=>$request->otra]);
        
        return response()->json(['success'=>'¡DATOS ACTUALIZADOS CORRECTAMENTE!']);
    }
    public function getSubcat($id){
        $subcat = DB::table('subcategoria')->where('id_categoria',$id)->get();
        return response()->json(['data'=>$subcat]);
    }
    public function hasChildren($id){
        $tiene = false;
        $datos = DB::table('subcategoria')->where('id_padre',$id)->get();
        if(sizeof($datos) > 0 ){
            $tiene = true;
        }
        return response()->json(['hay'=>$tiene,'data'=>$datos]);
    }
}
