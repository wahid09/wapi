<?php

namespace App\Http\Controllers\Admin\API\v1;

use App\Http\Resources\Module\NewModuleCollection;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModuleRequest;
use App\Http\Resources\Module\ModuleResource;
use App\Http\Resources\Module\ModuleCollection;
use Exception;
use Symfony\Component\HttpFoundation\Response;

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
            //$moduleList = ModuleCollection::collection(Module::latest()->paginate(3));
            $moduleList = new NewModuleCollection(Module::latest()->paginate(3));
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
    public function update(Request $request, Module $module)
    {
        try {
<<<<<<< HEAD
            $module->update($request->all());
=======
            $module->update([
                'name' => $request->name,
                'name_bn'=> $request->name_bn,
                'isActive' => $request->isActive
            ]);
>>>>>>> c6fcd34b875471f1b8c44c759e4621f97f1583c0

            return sendSuccess('Module updated successfully', $module, 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', 500);
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
            return sendSuccess('Module deleted successfully', '', Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}
