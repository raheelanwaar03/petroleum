<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function all()
    {
        $users = User::get();
        return view('admin.users.all',compact('users'));
    }

    public function add(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success','User added successfully');
    }


}
