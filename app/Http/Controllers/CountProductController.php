<?php

namespace App\Http\Controllers;

use App\CountProduct;
use Illuminate\Http\Request;

class CountProductController extends Controller
{
    private $cuenta;
    private $nombre;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ventas = Count_Product::all();
        return view('CountProduct.index',['ventas'=>$ventas]);
    }

    public function create()
    {
         //$venta = new CountProduct;
        //return view ('CountProduct.prueba');

        //return view ("CountProduct.create",["venta"=>$venta]);
        //return view('CountProduct.create');
    }

    public function store(Request $request)
    {
        // Obtiene el objeto del Usuario Autenticado
        // $user = Auth::user();
        // Obtiene el ID del Usuario Autenticado
        // $id = Auth::id();
        $Count_Product  = new Count_Product;
        $Count_Product->counts_id = $request->counts_id;
        $Count_Product->products_id = $request->products_id;
        $Count_Product->cantidad = $request->cantidad;
        $Count_Product->state_count__products_id = 1;

        if ($Count_Product->save()) {
            return redirect("/inicio");
            //return redirect ('/categorias2',['count'=>$request->counts_id]);
        } else {
            //return view("agregar_producto",["venta" => $venta]);
            return 'Producto no agregado a la lista de compras intetar de nuevo';
        }
    }

    public function show(CountProduct $countProduct)
    {
        return view ('CountProduct.show',['count_Product'=>$venta]);
    }

    public function edit(CountProduct $countProduct)
    {
        return view('CountProduct.edit',compact('count_Product'));
    }

    public function update(Request $request, CountProduct $countProduct)
    {
        // Obtiene el objeto del Usuario Autenticado
        $user = Auth::user();
        // Obtiene el ID del Usuario Autenticado
        $id = Auth::id();
        $venta->counts_id = $id;
        $venta->products_id = $request->products_id;
        $venta->cantidad = $request->cantidad;
        $venta->state_count__products_id = 1;

        if ($count->save()) {
            return redirect("ventas");
        } else {
            return view("Categories.categorias2",["venta" => $venta]);
        }
    }

    public function destroy(CountProduct $countProduct)
    {
        Product::destroy($count_Product->id);
        return redirect('ventas');
    }
}
