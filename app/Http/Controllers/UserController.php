<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $request){
        $newUser = new User();
        $newUser->fill($request->except('password'));
        $newUser->password= Hash::make($request->password);
        if($newUser->save()){
            return response()->json(['message' => 'New User Created Successfully'], Response:: HTTP_OK);
        }else{
            return response()->json(['message' => 'Something Went Wrong'], Response:: HTTP_BAD_REQUEST);
        }
    }
}
