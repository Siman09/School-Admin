<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Classcontroller extends Controller
{
    public function index()
    {

        return view('admin.class.class');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name'=>'required|integer|unique:classes,name'
        ]);

        $classes = new Classes();
        $classes->name = $req->name;
        $classes->save();
        return redirect()->route('admin.class.form')->with('success', 'Class is added Sucessfully');
    }
    public function list(){
       dd('comming soon');
    }
}
