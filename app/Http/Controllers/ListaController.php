<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supporte\Facades\DB;

use App\Cliente;

class ListaController extends Controller
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


        return view('consultalista');

   }

    public function consulta(Request $request){

    //   dd($request->all());

        // $listas = DB::select('select * from clientes')
        $listas = Cliente::select('cpf','nasc','idade','nome','telefone1 as telefone','banco','agencia','conta')
        ->where('banco',$request->banco)

        // ->get();
        ->paginate();
        // dd($listas);
        // return redirect()->route('view.listas');
        return view('viewlistas',compact('listas'));

    }
}
