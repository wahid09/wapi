<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryList = Category::latest()->get();
        return response()->json(['categoryList'=> $categoryList], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories',
            'name_bn'=> 'required|string|max:255',
            'description'=> 'required|string|max:1200',
            'description_bn'=> 'required|string|max:1200'
        ]);

        // $name = $request->filled('isActive')==1 ? 1 : 0;
        // print_r($name);
        // exit();

        return Category::create([
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'name_bn'=> $request['name_bn'],
            'description'=> $request['description'],
            'description_bn'=> $request['description_bn'],
            'isActive'=> $request->filled('isActive')==1 ? 1 : 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return response()->json(['categoryById'=> $category], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //return $request;
        //exit();
        $status = $request->filled('isActive')==1 ? 1 : 0;
        return $category->update([
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'name_bn'=> $request['name_bn'],
            'description'=> $request['description'],
            'description_bn'=> $request['description_bn'],
            'isActive'=> $status,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        return $category->delete();
    }
}
