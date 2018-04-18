<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriasRequest;


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
        $categorias = Category::orderBy('id','DESC')->paginate(4);
        return view ("CRUD_Categorias.index",["categorias"=>$categorias]);
    }

    public function create()
    {
        $categoria = new Category;
        return view ("CRUD_Categorias.create",["categoria"=>$categoria]);
    }

    public function store(CategoriasRequest $request)
    {
        $categoria  = new Category;
        $categoria->NombreCategoria = $request->NombreCategoria;
        if ($request->file('imagen')){
            $path = Storage::disk('public')->put('img/categorias', $request->file('imagen'));
            $categoria->fill(['imagen'=>asset($path)])->save();
        }

        if ($categoria->save()) {
            return redirect()-> route('categorias.index')->with('success','La creacikon de la nueva categoria se realizo exitosamente');
           // return redirect("/categorias");
        } else {
            return view("/CRUD_Categorias.create",["categoria" => $categoria]);
        }
    }

    public function edit($id)
    {
        $categoria = Category::findOrFail($id);
        return view('CRUD_Categorias.edit',compact('categoria'));
    }

    public function update(CategoriasRequest $request, $id)
    {
        $categoria = Category::findOrFail($id);
        $borrar = $categoria->imagen;
        $categoria->fill($request->all())->save();
       
        if ($request->file('imagen')){
            Storage::disk('public')->delete(substr($borrar,14));
            $path =Storage::disk('public')->put('img/categorias', $request->file('imagen'));

            $categoria->fill(['imagen'=>asset($path)])->save();
        }

            if ($categoria->save()) {
                return redirect()-> route('categorias.index')->with('success',' La edicion de la categoria se realizo exitosamente');
            } else {
                return view("/CRUD_Categorias.create",["category" => $category]);
            }
    }

    

    public function destroy($id)
    {
        //dd(substr(Category::findOrFail($id)->imagen,14));
        if(file_exists(public_path(substr(Category::findOrFail($id)->imagen,14)))){
            Storage::disk('public')->delete(substr(Category::findOrFail($id)->imagen,14));
        }
        Category::destroy($id);
        return redirect()-> route('categorias.index')->with('danger',' La categoria se elimino exitosamente');

    }
    
}
