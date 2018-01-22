<?php

namespace App\Http\Controllers;

use App\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
   
    public function index()
    {
        $counts = Count::all()->sortByDesc("id")->whereIn('state_counts_id', [1,2,3]);
        
        $count = new Count;
        return view ("count.index",["counts"=>$counts,"count"=>$count]);
    }

    public function create()
    {
        $count = new Count;
        return view ("count.create",["count"=>$count]);
    }

    public function store(Request $request)
    {
         // Obtiene el objeto del Usuario Autenticado
         $user = Auth::user();
         // Obtiene el ID del Usuario Autenticado
         $id = Auth::id();
         $count  = new Count;
         $count->user_id = $id;
         $count->state_counts_id = 1;
         $count->NombreCliente = $request->NombreCliente;
 
         if ($count->save()) {
             return redirect("/inicio");
         } else {
             return view("count.create",["count" => $count]);
         }
    }

    public function show(Count $count)
    {
        return view('count.show',["count" => $count]);
    }

   
    public function edit(Count $count)
    {
        //pendiente la parte de edicion de cuentas solo editar el nombre del cliente
    }


    public function update(Request $request, Count $count)
    {
        //pendiente las actualizaciones de estado 
        //En espera de pedido
        //Cuenta activa
        //Cuenta por cobrar
        //En historial
    }

    public function destroy(Count $count)
    {
        // eliminar las cuentas solo cuando esten en el historial o esten vacias las cuentas
    }
}
