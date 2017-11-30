<?php

namespace App\Http\Controllers;
use App\clientes;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\ventas;
class clientesController extends Controller
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

        $consulta= clientes::all();
        return view('clientes.index',compact('consulta'));
      
    }


   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.clientes_create');
    }

    public function obtener_cliente($id)
    {
//
        try{
            $this->records= clientes::find($id);
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

     public function ingresar_cliente(Request $request)
    {
//
        try{
            $this->records= 
        clientes::create([
             "nombre"           =>  $request->input('nombre'),
             "direccion"        =>  $request->input('direccion'),
             "fecha_nacimiento" =>  $request->input('fecha_nacimiento'),
             "sexo"             =>  $request->input('sexo'),
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
        
        public function eliminar_cliente($id)
    {
//
        try{
            $this->records=  $clientes=clientes::where('id_clientes',$id)->first();
      
            $clientes->delete();
        

         
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
        
        public function modificar_cliente(Request $request,$id)
    {
//
        try{
            $this->records=  
            $cliente= clientes::where('id_clientes',$id)->first();
       
        $cliente->nombre           = $request->input('nombre');
        $cliente->direccion          = $request->input('direccion');
        $cliente->fecha_nacimiento   = $request->input('fecha_nacimiento');
        $cliente->sexo               = $request->input('sexo');
        $cliente->nit                = $request->input('nit');
        $cliente->telefono           = $request->input('telefono');
        $cliente->save();
        

         
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
         


        clientes::create([
             "nombre"           =>  $request->input('nombre'),
             "direccion"        =>  $request->input('direccion'),
             "fecha_nacimiento" =>  $request->input('fecha_nacimiento'),
             "sexo"             =>  $request->input('sexo'),
             "nit"              =>  $request->input('nit'),
             "telefono"         =>  $request->input('telefono'),
        ]);
         
        $consulta= clientes::all();
        return view('clientes.index',compact('consulta'));
      
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
         $cliente = clientes::where('id_clientes',$id)->first();
        return view('clientes.clientes_delete',compact('cliente'));
//return view('layouts.clientes_delete');
       //  return view('layouts.clientes_delete', ['clientes' => clientes::find($id)]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $cliente = clientes::where('id_clientes',$id)->first();
        return view('clientes.clientes_edit',compact('cliente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request,$id)
    {

        $cliente= clientes::where('id_clientes',$id)->first();
       
        $cliente->nombre           = $request->input('nombre');
        $cliente->direccion          = $request->input('direccion');
        $cliente->fecha_nacimiento   = $request->input('fecha_nacimiento');
        $cliente->sexo               = $request->input('sexo');
        $cliente->nit                = $request->input('nit');
        $cliente->telefono           = $request->input('telefono');
        $cliente->save();
        
      //  dd('entro');
         $consulta= clientes::all();
        return view('clientes.index',compact('consulta'));
        //$cliente=clientes::find($id);
        //return view('layouts.clientes')->with('notice','el usuario ha sido modificado correctamente');

       
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
      
        


        $cliente=clientes::where('id_clientes',$id)->first();
      
        $cliente->delete();
        

         $consulta= clientes::all();
        return view('clientes.index',compact('consulta'));
       
   


    }
}
