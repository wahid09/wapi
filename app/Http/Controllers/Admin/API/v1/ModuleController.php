<?php

namespace App\Http\Controllers\Admin\API\v1;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModuleRequest;
use App\Http\Resources\Module\ModuleResource;
use App\Http\Resources\Module\ModuleCollection;
use Exception;

class ModuleController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        //$this->middleware('auth:api', ['except' => ['login']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $moduleList = ModuleCollection::collection(Module::latest()->get());
            return sendSuccess('Successfully get module list', $moduleList, 200);
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
    public function store(ModuleRequest $request)
    {
        try {
            $module = Module::create([
                'name' => $request['name'],
                'name_bn'=> $request['name_bn'],
                'isActive' => $request->filled('isActive')==1 ? 1 : 0,
            ]);

            return sendSuccess('Module added successfully', $module, 201);
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
    public function show(Module $module)
    {
        try {
            $module = new ModuleResource($module);
            return sendSuccess('Module show successfully', $module, 200);
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
    public function update(ModuleRequest $request, Module $module)
    {
        try {
            $module->update([
                'name' => $request['name'],
                'name_bn'=> $request['name_bn'],
                'isActive' => $request->filled('isActive')==1 ? 1 : 0,
            ]);

            return sendSuccess('Module updated successfully', $module, 200);
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
    public function destroy(Module $module)
    {
        try {
            $module->delete();
            return sendSuccess('Module deleted successfully', '', 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}
