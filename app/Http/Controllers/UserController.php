<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pages/login');
    }
    public function login(Request $req){
        // return view('pages/login');
        print_r($req->all());
    }

    // Registration form
    public function register_page(){
        return view('pages/register');
    }

    public function register(Request $req){

        $req->validate([
            'name'=>                'required',
            'email'=>               'required | email',
            'password'=>            'required',
            'confirm_password'=>    'required | same:password'
        ]);
        echo "<pre>";
        print_r($req->all());
    }
}
