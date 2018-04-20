<?php

namespace App\Http\Controllers;

use App\Count;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\CountProduct;
use App\Http\Requests\CuentasRequest;

class CountController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Obtiene el objeto del Usuario Autenticado
        $user = Auth::user();
        // Obtiene el ID del Usuario Autenticado
        $id = Auth::id();
        $counts = Count::all()->sortByDesc("id")->whereIn('user_id',$id)->whereIn('status_counts_id', [1,2,3]);
        $cuenta = new Count;
        return view ("CRUD_Cuentas.index",compact('counts','cuenta'));
    }


    public function store(CuentasRequest $request)
    {
         // Obtiene el objeto del Usuario Autenticado
         $user = Auth::user();
         // Obtiene el ID del Usuario Autenticado
         $id = Auth::id();
         $cuenta  = new Count;
         $cuenta->user_id = $id;
         $cuenta->status_counts_id = 1;
         $cuenta->NombreCliente = $request->NombreCliente;
 
         if ($cuenta->save()) {
            return redirect()-> route('cuentas.index')->with('info','Se creo nueva cuenta para: '.$request->NombreCliente.'');

         } else {
             return view("CRUD_Cuentas.create",["cuenta" => $cuenta]);
         }
    }

    public function show($id)
    {
        $cuenta = Count::findOrFail($id);
        return view('CRUD_Cuentas.show',["cuenta" => $cuenta]);
    }

   
    public function edit(Count $cuenta)
    {
        //pendiente la parte de edicion de cuentas solo editar el nombre del cliente
    }


    public function update(Request $request, Count $cuenta)
    {
        //pendiente las actualizaciones de estado 
        //En espera de pedido
        //Cuenta activa
        //Cuenta por cobrar
        //En historial
    }

    public function destroy(Count $cuenta)
    {
        // eliminar las cuentas solo cuando esten en el historial o esten vacias las cuentas
    }

    public function historial(){
        //->whereIn('user_id',$id) con el id del administrador
        $counts = Count::all()->sortByDesc("id")->whereIn('status_counts_id', [4]);
        $cuenta = new Count;
        return view ("CRUD_Cuentas.index",compact('counts','cuenta'));
    }
    public function agregar($id_cuenta){
        $categorias = Category::all();
        $id_user = Auth::id();
        return view ("CRUD_Cuentas.agregar",compact('categorias','id_cuenta'));
    }
    public function venta (Request $request){
      
        if($request->productos != 0){
            foreach ($request->productos as $producto){
                $venta = new CountProduct;
                $venta->counts_id = $request->counts_id;
                $venta->products_id = $producto;
                $venta->status_count_products_id = $request->status_count_products_id;
                $venta->cantidad = $request->cantidad[$producto];
                $venta->save();
            }
        }
        return redirect('/confirmar/'.$request->counts_id);
    }

    public function confirmar ($id){
        $cuenta = Count::findOrFail($id);
        return view('CRUD_Cuentas.confirmar',["cuenta" => $cuenta]);
    }

    public function estado ($id){
        $cuenta = Count::findOrFail($id);
        if($cuenta->Products->count()==0){
            return redirect("/cuentas");
        }

        foreach($cuenta->Products as $Product){
            if($Product->pivot->status_count_products_id == 1)     {
                $Product->pivot->status_count_products_id = 2;
                $Product->pivot->save();
            }
        }
       $cuenta->status_counts_id = 2;
       $cuenta->save();
       return redirect()-> route('cuentas.index')->with('info','Se agregaron nuevos productos a la cuenta de: '.$cuenta->NombreCliente.'');
    }
}
