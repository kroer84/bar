<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductosRequest;
use App\Category;

class ProductController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isMaster');
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

    public function store(ProductosRequest $request)
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
            return redirect()-> route('productos.index')->with('info','La creación de del producto se realizo exitosamente');
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

    public function update(ProductosRequest $request, $id)
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
            return redirect()-> route('productos.index')->with('success','La edición de del producto se realizo exitosamente');
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
        return redirect()-> route('productos.index')->with('danger',' El producto se elimino exitosamente');
    }
}
