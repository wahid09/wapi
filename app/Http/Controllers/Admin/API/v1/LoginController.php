<?php

namespace App\Http\Controllers\Admin\API\v1;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /*
     * Handle a login request to the application.
     * @param  \Illuminate\Http\Request  $request
     * @return JWT access token
     * @throws Request validation errors.
     */

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }
        try {
            if (!$token = $this->guard()->attempt($credentials)) {
                return sendError('Login credentials are invalid.', '', 400);
            }
        } catch (JWTException $e) {
            //return $credentials;
            return sendError('Could not create token.', '', 500);
        }

        $result = $this->respondWithToken($token);
        return sendSuccess('You are logged in successfully', $result, 200);
    }

    public function me(): JsonResponse
    {
        //return response()->json($this->guard()->user());
        try {
            $me = $this->guard()->user();
            return sendSuccess('Successfully get module list', $me, 200);
        } catch (\Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    /*
     * Logout user of his session.
     */
    public function logout()
    {
        $this->guard()->logout();
        return response()->json(['message' => 'Successfully logged out'], 200);
    }

    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

//    protected function respondWithToken($token)
//    {
//        return response()->json([
//            'access_token' => $token,
//            'token_type' => 'bearer',
//            'expires_in' => $this->guard()->factory()->getTTL() * 60
//        ]);
//    }
    /*
     * Create a new access token per user request
     * @return an array
     */
    protected function respondWithToken($token): array
    {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ];
    }

    public function guard()
    {
        return Auth::guard();
    }
}
