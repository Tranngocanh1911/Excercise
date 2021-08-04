<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function showFormLogin(){
        return view ('admin.login');
    }

    function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        if($email=='admin@gmail.com' && $password == '123456'){
            $userLogin =[
                'username' => 'admin',
                'email' => 'admin@gmail.com'
            ];
            session()->put('userLogin', $userLogin);
            return redirect()->route('users.index');

        } else {
            session()->flash('login_error','account not exist!');
            return redirect()->route('admin.showFormLogin');
        }
    }

    function logout(){
        session()->forget('userLogin');
        return redirect()->route('admin.showFormLogin');

    }
}
