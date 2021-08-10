<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * wahid ullah
 */
trait ExceptionTrait
{
    public function apiException($request, $e){
        if($e instanceof ModelNotFoundException){
            return response()->json([
                'errors'=> 'Model not found'
            ], Response::HTTP_NOT_FOUND);
        }
        if($e instanceof NotFoundHttpException){
            return response()->json([
                "errors"=>"Incorrect route"], Response::HTTP_NOT_FOUND);
        }

        return parent::render($request, $e);
    }
}
