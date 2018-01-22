<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view ("products.index",["products"=>$products]);
    }

    public function create()
    {
        $categorias = Category::all();
        $product = new Product;
        return view ("products.create",["product"=>$product,"categorias"=>$categorias]);
    }

    public function store(Request $request)
    {
        $product  = new Product;
        $product->categories_id = $request->categories_id;
        $product->NombreProducto = $request->NombreProducto;
        $product->precio = $request->precio;

        if ($product->save()) {
            return redirect("/product");
        } else {
            return view("/products.create",["product" => $product]);
        }    
    }

    public function show(Product $product)
    {
        return view('products.show',['product'=>$product]);
    }

    public function edit(Product $product)
    {
        $categorias = Category::all();
        return view('products.edit',compact('product','categorias'));
    }

    public function update(Request $request, Product $product)
    {
        $product->categories_id = $request->categories_id;
        $product->NombreProducto = $request->NombreProducto;
        $product->precio = $request->precio;


        if ($product->save()) {
            return redirect("/product");
        } else {
            return view("/products.edit",["product" => $product]);
        }
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/product');
    }
}
