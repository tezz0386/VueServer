<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function me()
    {
        $data['user']=\Auth::user();
        $data['message']='Your Info';
        return response()->json($data, 200);
    }
}
