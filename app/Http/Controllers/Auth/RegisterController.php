<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void

     */

    public function obtener_usuario($id)
    {
//
        try{
            $this->records= User::find($id);
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
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'sexo' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'sexo' => $data['sexo'],
        ]);
        
    }
}
