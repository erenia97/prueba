<?php

namespace App\Http\Controllers;
use App\ventas_detalle;
use Illuminate\Http\Request;
use DB;
class ventas_detalleController extends Controller
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
         $consulta= ventas_detalle::with('productos')->get();

        return view('ventas_detalle.index',compact('consulta'));
        
    }
    

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
         ventas_detalle::create([
             "cantidad"           =>  $request->input('cantidad'),
             "subtotal"        =>  $request->input('subtotal'),
             
        ]);
         
        $consulta= ventas_detalle::with('productos')->get();

        return view('ventas_detalle.index',compact('consulta'));

         
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
         return view('ventas_detalle.index', ['ventas_detalle' => ventas_detalle::find($id)]);

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
    }
}
