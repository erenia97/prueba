<?php

namespace App\Http\Controllers;
use App\ventas;
use Illuminate\Http\Request;

use DB;
class ventasController extends Controller
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
       
        $consulta= ventas::with('usuario')->with('cliente')->with('detalle')->get();
        return view('ventas.index',compact('consulta'));
        // $consulta= ventas::with('ventascliente2')->get();
        // return view('layouts.ventas',compact('consulta'));
    }
     public function obtener_ventas($id)
    {
//
        try{
            $this->records= 
             $consulta= ventas::with('usuario')->with('cliente')->with('detalle')->get();
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
    
     //public function formulario(){
    //$consulta= ventas::with('usuario')->with('cliente')->with('detalle')->get();
     //}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         
         $ventas=
          ventas::create([

             "status"           =>  $request->input('status'),

           
             ]);
       
        $cliente->save();
        $consulta= ventas::all();
        return view('ventas.index',compact('consulta'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_ventas)
    {
        //
      $ventas= ventas::find($id_ventas);
      //dd($ventas->detalle[1]->id_productos);
      //dd($ventas->detalle);
        return view('ventas.detalle',compact('ventas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      

        $consulta= ventas::with('usuario')->with('cliente')->with('detalle')->get();
        return view('ventas.index',compact('consulta'));
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

         $estado=1;
        $ventas=ventas::find($id);
        $ventas->status  = $estado;
       
        $ventas->save();


        $consulta= ventas::with('usuario')->with('cliente')->with('detalle')->get();
        return view('ventas.index',compact('consulta'));

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
        $ventas= ventas::with('usuario')->with('cliente')->get();
        
      
        $ventas->status=('1');
        

         $consulta= clientes::all();
        return view('clientes.index',compact('consulta'));
    }
}
