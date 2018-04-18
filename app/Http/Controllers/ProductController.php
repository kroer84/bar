<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;

class ProductController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isMaster');
        /*El middleware auth protege de los usuarios que no estan autenticados
        El middleware isAdmin protege las vistas de los usuarios que no son ni admin ni master
        El middleware isMaster protege las vistas de los usuarios que no sean master
        La proteccion de rutas las hice por middleware de acuerdo al diagrama de arquitectura de la informacion
        si alguna vista no deberia de estar bloqueada por algun middleware usa el siguiente codigo:
        $this->middleware('nombre_middlware',['except'=>['nombre_de_la_funcion']]); con esta linea dices que no quieres
        que se aplique tal middleware a tal funcion NOTA: el middleware auth siempre debe estar en todas las funciones*/
    }

    public function index()
    {
        $productos = Product::orderBy('id','DESC')->paginate(10);
        return view ("CRUD_Productos.index",["productos"=>$productos]);
    }

    public function create()
    {
        $categorias = Category::pluck('NombreCategoria','id');
        $producto = new Product;
        return view ("CRUD_Productos.create",compact('categorias','producto'));
    }

    public function store(Request $request)
    {
        $producto  = new Product;
        $producto->categories_id = $request->categories_id;
        $producto->NombreProducto = $request->NombreProducto;
        $producto->precio = $request->precio;
        if ($request->file('imagen')){
            $path = Storage::disk('public')->put('img/productos', $request->file('imagen'));
            $producto->fill(['imagen'=>asset($path)])->save();
        }

        if ($producto->save()) {
            return redirect("/productos");
        } else {
            return view("/CRUD_Productos.create",["producto" => $producto]);
        }    
    }

    public function edit($id)
    {
        $producto = Product::findOrFail($id);
        $categorias = Category::pluck('NombreCategoria','id');
        return view('CRUD_Productos.edit',compact('producto','categorias'));
    }

    public function update(Request $request, $id)
    {
        $producto = Product::findOrFail($id);
        $borrar = $producto->imagen;
        $producto->fill($request->all())->save();

        if ($request->file('imagen')){
            Storage::disk('public')->delete(substr($borrar,14));
            $path =Storage::disk('public')->put('img/productos', $request->file('imagen'));
            $producto->fill(['imagen'=>asset($path)])->save();
        }

        if ($producto->save()) {
            return redirect("/productos");
        } else {
            return view("/CRUD_Productos.create",["producto" => $producto]);
        }

    }

    public function show(Product $product)
    {
        return view('CRUD_Productos.show',['product'=>$product]);
    }


    public function destroy($id)
    {
        if(file_exists(public_path(substr(Product::findOrFail($id)->imagen,14)))){
            Storage::disk('public')->delete(substr(Product::findOrFail($id)->imagen,14));
        }
        Product::destroy($id);
        return redirect('/productos');
    }
}
