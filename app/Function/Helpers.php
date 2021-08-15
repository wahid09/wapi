<?php
 /**
  * This function return error response
  */
function sendError($message, $messages=[], $code=404){
    $response = [
        'isSuccess'=> false,
        'message'  => $message,
    ];

    !empty($messages) ? $response['errors'] = $messages : null;

    return response()->json($response, $code);
}

/**
 * This function return success response
 */
function sendSuccess($message, $data=[], $code=200){
    $response = [
        'isSuccess'=> true,
        'message'  => $message,
        'data'=>$data,
    ];
    return response()->json($response, $code);
}
