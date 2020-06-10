<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClienteController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }





    public function view(){


        return view('consultacliente');

   }

    public function consulta(Request $request){

         //dd($request->all());
        $clientes = Cliente::select('cpf','nome','telefone1 as telefone','banco','agencia','conta')
        ->where('cpf',$request->cpf)
        ->get();
         //dd($clientes);
        // return redirect()->route('view.cliente');
        return view('viewcliente',compact('clientes'));

    }
}
