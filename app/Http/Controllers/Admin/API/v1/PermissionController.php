<?php

namespace App\Http\Controllers\Admin\API\V1;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Http\Resources\Permission\PermissionCollection;
use App\Http\Resources\Permission\PermissionResource;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissionList = PermissionCollection::collection(Permission::latest()->get());
        return response()->json([
            'isSuccess' => true,
            'message'   => 'response success',
            'permissionList'=> $permissionList,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $permission = Permission::create([
            'module_id' => $request['module_id'],
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'isActive' => $request->filled('isActive')==1 ? 1 : 0,
        ]);
        return response()->json([
            'isSuccess'=> true,
            'message'  => 'Permission added successfully',
            'permission'=> $permission,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        $permission = new PermissionResource($permission);
        return response()->json([
            'isSuccess' => true,
            'message'   => 'Response success',
            'permission'=>$permission,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $permission->update([
            'module_id' => $request['name'],
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'isActive' => $request->filled('isActive')==1 ? 1 : 0,
        ]);
        return response()->json([
            'isSuccess'=> true,
            'message'  => 'Permission updated successfully',
            'permission'=> $permission,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json([
            'isSuccess'=> true,
            'message'  => 'Permission deleted successfully',
        ]);
    }
}
