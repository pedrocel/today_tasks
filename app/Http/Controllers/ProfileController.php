<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function getEdit(){

        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.editar', compact('user'));
    }

    public function postEdit(EditUserRequest $request){

        User::where('id', Auth::user()->id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'cpf' => $request['cpf'],
            'phone' => $request['phone']
        ]);

        return redirect()->route('task.assignedme.get')->with('status', 'profile_update');

    }
}
