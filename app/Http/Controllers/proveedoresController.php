<?php

namespace App\Http\Controllers;
use App\proveedores;
use Illuminate\Http\Request;
use DB;

class proveedoresController extends Controller
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
        $consulta= proveedores::all();
        return view('proveedores.index',compact('consulta'));
    }
     public function obtener_proveedor($id)
    {
//
        try{
            $this->records= proveedores::find($id);
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

     public function ingresar_proveedor(Request $request)
    {
//
        try{
            $this->records= 
         proveedores::create([
             "nombre"           =>  $request->input('nombre'),
             "direccion"        =>  $request->input('direccion'),
            
             "nit"              =>  $request->input('nit'),
             "telefono"         =>  $request->input('telefono'),
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
        
        public function eliminar_proveedor($id)
    {
//
        try{
            $this->records= 
             $proveedores=proveedores::where('id_proveedores',$id)->first();
      
             $proveedores->delete();
        
        

         
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
        
        public function modificar_proveedor(Request $request,$id)
    {
//
        try{
            $this->records=  
            $proveedores= proveedores::where('id_proveedores',$id)->first();
       
            $proveedores->nombre           = $request->input('nombre');
            $proveedores->direccion          = $request->input('direccion');
            
            $proveedores->nit                = $request->input('nit');
            $proveedores->telefono           = $request->input('telefono');
            $proveedores->save();
            
        

         
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
        return view('proveedores.proveedores_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       proveedores::create([
             "nombre"           =>  $request->input('nombre'),
             "direccion"        =>  $request->input('direccion'),
            
             "nit"              =>  $request->input('nit'),
             "telefono"         =>  $request->input('telefono'),
        ]);
         
        $consulta= proveedores::all();
        return view('proveedores.index',compact('consulta'));
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
          $proveedores= proveedores::where('id_proveedores',$id)->first();
        return view('proveedores.proveedores_delete',compact('proveedores'));

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
         $proveedores = proveedores::where('id_proveedores',$id)->first();
        return view('proveedores.proveedores_edit',compact('proveedores'));
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

        $proveedores= proveedores::where('id_proveedores',$id)->first();
       
        $proveedores->nombre           = $request->input('nombre');
        $proveedores->direccion          = $request->input('direccion');
        
        $proveedores->nit                = $request->input('nit');
        $proveedores->telefono           = $request->input('telefono');
        $proveedores->save();
        
      //  dd('entro');
         $consulta= proveedores::all();
        return view('proveedores.index',compact('consulta'));
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

        $proveedores=proveedores::where('id_proveedores',$id)->first();
      
        $proveedores->delete();
        

         $consulta= proveedores::all();
        return view('proveedores.index',compact('consulta'));
       
    }
}
