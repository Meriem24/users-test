<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function index(){

        $users =  User::all();

       return view('welcome',compact('users'));
    }

    public function edit($id){

        $user = User::findorFail($id);

        return view("modicationEmail", compact("user"));
    }
    public function save(Request $request, $id){

        $name = $request->input('name');
        $email = $request->input('email');
        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->update();

        return redirect()->back();
    }


}