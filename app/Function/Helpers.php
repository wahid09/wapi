<?php

function sendError($message, $messages=[], $code=404){
    $response = [
        'isSuccess'=> false,
        'message'  => $message,
    ];
    return response()->json($response, $code);
}
function sendSuccess($message, $data=[], $code=200){
    $response = [
        'isSuccess'=> true,
        'message'  => $message,
        'data'=>$data,
    ];
    return response()->json($response, $code);
}
