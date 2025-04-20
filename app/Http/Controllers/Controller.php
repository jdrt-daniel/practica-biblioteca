<?php

namespace App\Http\Controllers;

abstract class Controller
{

    public function successList($data)
    {
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $data
        ]);
    }

    public function successCreate($data)
    {
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $data
        ]);
    }

    public function successUpdate($data)
    {
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $data
        ]);
    }

    public function successDelete($data)
    {
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $data
        ]);
    }

    public function error(string $message)
    {
        return response()->json([
            'status' => 'error',
            'code' => 400,
            'message' => $message
        ]);
    }

}
