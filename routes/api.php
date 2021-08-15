<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Route::middleware('auth:api')->get('/user', 'UserController@AuthRouteAPI');

Route::group(['prefix' => 'v1', 'namespace' => 'Admin\Api\v1'], function () {
    Route::ApiResource('module', 'ModuleController');
    Route::ApiResource('permission', 'PermissionController');
    Route::ApiResource('role', 'RoleController');
    Route::ApiResource('category', 'CategoryController');
    Route::get('module_with_permission', 'RoleController@moduleWithPermission');
});