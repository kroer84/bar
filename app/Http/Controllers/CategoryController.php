<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view ("categories.index",["categories"=>$categories]);
    }

    public function create()
    {
        $category = new Category;
        return view ("categories.create",["category"=>$category]);
    }

    public function store(Request $request)
    {
        $category  = new Category;
        $category->NombreCategoria = $request->NombreCategoria;

        if ($category->save()) {
            return redirect("/category");
        } else {
            return view("/categories.create",["category" => $category]);
        }
    }

    public function show(Category $category)
    {
        return view('categories.show',['category'=>$category]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->NombreCategoria = $request->NombreCategoria;
        
            if ($category->save()) {
                return redirect("/category");
            } else {
                return view("/categories.create",["category" => $category]);
            }
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/category');
    }
}
