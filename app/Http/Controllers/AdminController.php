<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin.login');
    }
    public function dashbord()
    {
        return view('admin.dashbord');
    }
    public function form()
    {
        return view('admin.form');
    }
    public function table()
    {
        return view('admin.table');
    }
    public function authenticate(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password])) {
            if (Auth::guard('admin')->user()->role != 'admin') {
                return redirect()->route('admin.login')->with('error', 'Your not admin ');
            } else {

                return redirect()->route('admin.dashbord')->with('success', 'login Sucessfull');
            }
        } else {
            return redirect()->route('admin.login')->with('error', 'something wrong');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
       return redirect()->route('admin.login')->with('success','logout Sucessfull');
    }
    public function register(Request $req)
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 's@gmail.com';
        $user->role = 'admin';
        $user->password = Hash::make('123');
        $user->save();
        return redirect()->route('admin.login')->with('success', 'User is registered sucessfully');
    }
}
