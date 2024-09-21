<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages.register');
    }

    public function register(Request $req){
        $admin = new Admin;
        $admin->username = $req['name'];
        $admin->name = $req['name'];
        $admin->email = $req['email'];
        $admin->clgName = $req['clgName'];
        $admin->contact = $req['contact'];
        $admin->password = md5($req['password']);
        $admin->save();
        // $admin->access = $req['access'];
        // print_r($req->all());
        return redirect('/register/view');
    }

    public function view(){
        $admin = Admin::all();
        $data = compact('admin');
        return view('pages.home')->with($data);
    }
}
