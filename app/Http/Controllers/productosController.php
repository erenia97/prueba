<?php

namespace App\Http\Controllers;
use App\productos;
use Illuminate\Http\Request;

use DB;
use App\ventas_detalle;

class productosController extends Controller
{

    protected $status_code  = 200;
    protected $result       = false;
    protected $message      = 'Error while processing your request';
    protected $records      = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $consulta= productos::all();
      
  return view('productos.index',compact('consulta'));
 
        
    }

    public function obtener_producto($id)
    {
//
        try{
            $this->records= productos::find($id);
            $this->message= 'consulta exitosa';
            $this->result=true;
            }
         catch(Exception $e)
          {
            $this->message= $e ->getMessage();
            $this->result = false;
          }
          finally
          {
            $response=[
                   'message'=> $this->message,
                   'result' => $this->result,
                   'records'=> $this->records 

             ];
             return response()->json($response,$this->status_code);
          }

    }

     public function ingresar_producto(Request $request)
    {
//
        try{
            $this->records= 
        productos::create([
         "nombre"     =>  $request->input('nombre'),
         "codigo"     =>  $request->input('codigo'),
         "sku"        =>   $request->input('sku'),
          "precio"        =>   $request->input('precio'),
          ]);

         
            $this->message= 'Ingresado correctamente';
            $this->result=true;
            }
         catch(\Exception $e)
          {
            $this->message= $e ->getMessage();
            $this->result = false;
          }
          finally
          {
            $response=[
                   'message'=> $this->message,
                   'result' => $this->result,
                   'records'=> $this->records 

             ];
             return response()->json($response,$this->status_code);
          }

        }
        
        public function eliminar_producto($id)
    {
//
        try{
            $this->records=  
            $producto=productos::where('id_productos',$id)->first();
      
            $producto->delete();
        

         
            $this->message= 'Eliminado correctamente';
            $this->result=true;
            }
         catch(\Exception $e)
          {
            $this->message= $e ->getMessage();
            $this->result = false;
          }
          finally
          {
            $response=[
                   'message'=> $this->message,
                   'result' => $this->result,
                   'records'=> $this->records 

             ];
             return response()->json($response,$this->status_code);
          }

        }
        
        public function modificar_producto(Request $request,$id)
    {
//
        try{
            $this->records=  
            $producto= productos::where('id_productos',$id)->first();
        
            $producto->nombre           = $request->input('nombre');
            $producto->codigo        = $request->input('codigo');
        //$producto->sku       = $request->input('producto');
        
            $producto->save();
        

         
            $this->message= 'modificado correctamente';
            $this->result=true;
            }
         catch(\Exception $e)
          {
            $this->message= $e ->getMessage();
            $this->result = false;
          }
          finally
          {
            $response=[
                   'message'=> $this->message,
                   'result' => $this->result,
                   'records'=> $this->records 

             ];
             return response()->json($response,$this->status_code);
          }

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.productos_create');
    }

   
    public function store(Request $request)
    {
        //

       productos::create([
         "nombre"     =>  $request->input('nombre'),
         "codigo"     =>  $request->input('codigo'),
         "sku"        =>   $request->input('sku'),
         "precio"     =>   $request->input('precio'),
          ]);

        $consulta= productos::all();
        return view('productos.index',compact('consulta'));
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       //
         $producto = productos::where('id_productos',$id)->first();
        return view('productos.productos_delete',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $producto = productos::where('id_productos',$id)->first();
        return view('productos.productos_edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $producto= productos::where('id_productos',$id)->first();
        
        $producto->nombre           = $request->input('nombre');
        $producto->codigo        = $request->input('codigo');
        $producto->precio       =  $request->input('precio');
        //$producto->sku       = $request->input('producto');
        
        $producto->save();
        
      //  dd('entro');
         $consulta= productos::all();
        return view('productos.index',compact('consulta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $producto=productos::where('id_productos',$id)->first();
      
        $producto->delete();
        

         $consulta= productos::all();
        return view('productos.index',compact('consulta'));
    }
}
