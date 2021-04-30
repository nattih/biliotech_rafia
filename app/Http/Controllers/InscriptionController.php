<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class inscriptionController extends Controller
{
    
    public function inscription(){
        $data=request()->validate([
            'name'=>['required','string'],
            'email'=>['required','string','email','unique:users'],
            'password'=>['required', 'confirmed', 'min:3', 'max:6']
        ]);

        $admin = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
            Session::flash('message', 'Inscription réussie! Veuillez entrer vos identifiants pour vous connecter.');
            Session::flash('alert-class', 'alert-success text-center');
            return redirect()->back();
    }
 
}
