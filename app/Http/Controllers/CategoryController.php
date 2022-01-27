<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index()
    {
        if (auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }

        $categories = Category::all();

        return view('categories.index', compact('categories'))->with('parent');

    }


    public function create()
    {
        //
    }


    public function store()
    {
        $attr = request()->validate([
           'parent_id' => '',
           'name' => 'required|unique:categories,name'
        ]);

        Category::create($attr);

        return redirect('/categories')->with('success', 'The category is added.');
    }



    public function edit(Category $category)
    {
        return view('categories.update', ['category' => $category]);
    }



    public function update(Category $category)
    {
        $attr = request()->validate([
            'parent_id' => '',
            'name' => 'required'
        ]);

        $category->update($attr);

        return redirect('/categories')->with('success', 'Category Updated!');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories')->with('success', 'Category Deleted!');
    }
}
