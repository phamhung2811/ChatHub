<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
                $user = User::where('email', $credentials['email'])->first();
            if($request->isMethod('POST')){
                if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                    if ($user && Hash::check($credentials['password'], $user->password)) {
                        return redirect()->route('home');
                        
                }else{
                    return redirect()->back()->withErrors(['login' => 'Thông tin đăng nhập không chính xác']);
                }
            }
            return redirect()->back()->withErrors(['login' => 'Thông tin đăng nhập không chính xác']);
        }

    }
}
