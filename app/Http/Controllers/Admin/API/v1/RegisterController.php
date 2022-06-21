<?php

namespace App\Http\Controllers\Admin\API\v1;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('auth:api', ['except' => ['userRegister']]);
    }
    public function userRegister(UserRequest $request){
        try{
            $user = User::create($request->all());
            return sendSuccess('You have registered successfully', $user, 201);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}
