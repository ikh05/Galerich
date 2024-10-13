<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('home',[
            'title' => 'Home',
            'people' => User::all()
        ]);
    }
    public function person(User $user){
       return view('person',[
            'title' => $user->name,
            'person' => $user
        ]);
    }
    
}
