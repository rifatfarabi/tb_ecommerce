<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(5);
        return view('backend.category.index', compact('categories'));
    }


    public function create()
    {

        return view('backend.category.create');
    }


    public function store(Request $request)
    {
        $categories = Category::create([
            "name" => $request->name
        ]);

        return redirect()->route('category.index')->with('success', 'Category Added Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            "name" => $request->name
        ]);

        return redirect()->route('category.index')->with('success', 'Category updaded Successfully');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category Delete Successfully');
    }
}
