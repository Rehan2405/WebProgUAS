<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PwController extends Controller
{
    public function edit(){
        return view('auth.password');
    }
    protected function update(Request $request){
        $request->validate([
            'password' => ['required', 'string', 'min:5']
        ]);
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return view('/profile');
    }
}
