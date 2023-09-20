<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        // $request->validate([
        //     "identifier" => "required",
        //     "password" => "required"
        // ]);
        $user = User::select('*')->where('user_name', $request->user_name)->first()->get();
        if(sizeof($user)){
            $user->makeVisible(['password']);
            if(Hash::check($request->password, $user[0]->password)){
                return $user->createToken()->plainTextToken();
            }else{
                return response('Invalid Login', 503);
            }
        }
        return ;
        
    }
}
