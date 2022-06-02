<?php

namespace App\Http\Controllers\Admin\API\V1;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Http\Resources\Permission\PermissionCollection;
use App\Http\Resources\Permission\PermissionResource;
use Exception;
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
        try {
            $permissionList = PermissionCollection::collection(Permission::with('module')->latest()->get());
            return sendSuccess('Successfully show permission list', $permissionList, 200);
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
    public function store(PermissionRequest $request)
    {
        try {
            $permission = Permission::create([
            'module_id' => $request['module_id'],
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'isActive' => $request['isActive']==1 ? 1 : 0
        ]);
        return sendSuccess('Permission added successfully', $permission, 200);
        } catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        try {
            $permission = new PermissionResource($permission);
            return sendSuccess('Successfully show permission', $permission, 200);
        } catch (Exception $e) {
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
    public function update(PermissionRequest $request, Permission $permission)
    {
        try {
            $permission->update([
            'module_id' => $request['module_id'],
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'isActive' => $request['isActive']==1 ? 1 : 0
        ]);
        return sendSuccess('permission updated successfully', $permission, 200);
        } catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        try {
            $permission->delete();
            return sendSuccess('permission deleted successfully', '', 200);
        } catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}
