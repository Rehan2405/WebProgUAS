<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('profile', compact('users'));
    }

    public function admin()
    {
        $admins = User::all();
        return view('admin\profil', compact('admins'));
    }
    public function updateLogic(Request $request, $id){
        // $user_data = User::find($id);

        $request->validate([
            'role'=>'required'
        ]);
    }
    public function update($id){
        $user_data = User::where('id','=',$id)->first();
        //dd($data);
        return view('update', compact('user'));
    }
}
