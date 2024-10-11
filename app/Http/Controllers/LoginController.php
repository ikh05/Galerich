<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $data = ['title' => 'Login'];
    public function index($value=''){
        return view('login.index', $this->data);
    }
}
