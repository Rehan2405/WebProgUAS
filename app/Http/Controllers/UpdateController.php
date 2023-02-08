<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function edit(){
        return view('auth.update');
    }
    protected function update(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:5']
        ]);

        User::whereId(auth()->user()->id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'password' => Hash::make($request->password)
        ]);

        return view('/profile');
    }

}
