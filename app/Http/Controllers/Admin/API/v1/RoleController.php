<?php

namespace App\Http\Controllers\Admin\API\V1;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Resources\Role\RoleCollection;
use App\Http\Resources\Role\RoleResource;
use App\Models\Module;
use Exception;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $roleList = RoleCollection::collection(Role::latest()->get());
            return sendSuccess('Successfully show role list', $roleList, 200);
        } catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
    public function moduleWithPermission(){
        try {
            $module = Module::withTrashed()->with('permissions')->get();
            return sendSuccess('Successfully show role list', $module, 200);
        } catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create([
            'name' => $request['name'],
            'name_bn' => $request['name_bn'],
            'slug' => Str::slug($request['name']),
            'description' => $request['description'],
            'isActive' => $request->filled('isActive') == 1 ? 1 : 0,
        ])->permissions()->sync($request->input('permissions'), []);

        return response()->json([
            'isSuccess' => true,
            'message'  => 'Role added successfully',
            'role' => $role,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = new RoleResource($role);

        return response()->json([
            'isSuccess' => true,
            'message' => 'Response Success',
            'role' => $role,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update([
            'name' => $request['name'],
            'name_bn' => $request['name_bn'],
            'slug' => Str::slug($request['name']),
            'description' => $request['description'],
            'isActive' => $request->filled('isActive') == 1 ? 1 : 0,
        ]);
        $role->permissions()->sync($request->input('permissions'));

        return response()->json([
            'isSuccess' => true,
            'message'  => 'Role updated successfully',
            'role' => $role,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json([
            'isSuccess' => true,
            'message'  => 'Role deleted successfully',
        ]);
    }
}