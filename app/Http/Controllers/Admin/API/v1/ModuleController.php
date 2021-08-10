<?php

namespace App\Http\Controllers\Admin\API\v1;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModuleRequest;
use App\Http\Resources\ModuleResource;
use App\Http\Resources\ModuleCollection;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduleList = ModuleCollection::collection(Module::latest()->get());
        return response()->json([
            'isSuccess' => true,
            'message'   => 'Response success',
            'moduleList'=> $moduleList,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModuleRequest $request)
    {
        //$validated = $request->validated();
        $module = Module::create($request->all());
        return response()->json([
            'isSuccess'=> true,
            'message'  => 'Module added successfully',
            'module'   => $module,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = new ModuleResource(Module::find($id));
        return response()->json([
            'isSuccess' => true,
            'message'   => 'Response success',
            'module'=> $module,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module = Module::findOrFail($id);
        $module->update($request->all());
        return response()->json([
            'isSuccess' => true,
            'message'   => 'Module updated successfully',
            'module'=> $module,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
        return response()->json([
            'isSuccess' => true,
            'message'   => 'Module deleted successfully',
        ], 200);
    }
}
