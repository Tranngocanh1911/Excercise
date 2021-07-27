<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function create(){
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }
    function store(StoreUserRequest $request){
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->email);
       $user->save();

       $user->roles()->sync($request->roles);
       return redirect()->route('users.index');
    }

    function index(){
        $users = User::all();
        return view('admin.users.list',compact('users'));
    }
}
