<?php

namespace App\Http\Controllers\Admin\API\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Category\CategoryCollection;
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
        try {
            $categoryList = CategoryCollection::collection(Category::latest()->get());
            return sendSuccess('Successfully get category list', $categoryList, 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = Category::create([
                'name' => $request['name'],
                'slug' => Str::slug($request['name']),
                'name_bn' => $request['name_bn'],
                'description' => $request['description'],
                'description_bn' => $request['description_bn'],
                'isActive' => $request->filled('isActive')==1 ? 1 : 0,
            ]);
            return sendSuccess('Category added successful', $category, 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        try {
            $category = new CategoryResource($category);
            return sendSuccess('Successfully show category', $category, 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try {
            $category->update([
                'name' => $request['name'],
                'slug' => Str::slug($request['name']),
                'name_bn' => $request['name_bn'],
                'description' => $request['description'],
                'description_bn' => $request['description_bn'],
                'isActive' => $request->filled('isActive')==1 ? 1 : 0
            ]);
            return sendSuccess('Category update successful', $category, 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return sendSuccess('Category deleted successfully', '', 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}
