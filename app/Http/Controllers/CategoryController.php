<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogCategory;
use Illuminate\Http\Request;
use App\Category;



class CategoryController extends Controller
{

    protected $redirectTo = '/category';
    public function index(){
        $categories = Category::all(); //Récupère toutes les catégories et les renvoie en objet ss forme de tableau
        return view('category.list', ['categories' => $categories]);

        // DOCUMENTATION https://laravel.com/docs/5.5/queries
        // Retrieve a model by its primary key
        // $category = Category::find(1);
        // Retrieve the first model matching the query constraints
        // $category = Category::where('idcategories', 1)->all();
    }


    public function create() {
     return view('category.create');
    }

    public function store(StoreBlogCategory $request) {
        $category = new Category;
        $category->label = $request->label;
        $category->save();
        return redirect($this->redirectTo);
    }

    public function update($id) {
        $category = Category::find($id);
        return view('category.update', ['category'=> $category]);
    }

    public function edit(StoreBlogCategory $request, $id) {
        $category = Category::find($id);
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }

    public function delete ($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect($this->redirectTo);
    }
}




