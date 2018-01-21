<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    } */

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
