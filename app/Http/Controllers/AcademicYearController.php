<?php

namespace App\Http\Controllers;


use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    public function index()
    {
        return view('admin.academicyear');
    }
    public function store(request $req)
    {
        $req->validate([
            'name' => 'required|integer|unique:academic_years,name',
        ]);

        $academic = new AcademicYear(); //model name
        $academic->name = $req->name;
        $academic->save();
        return redirect()->route('admin.academicyear')->with('success', 'Added Sucessfully');
    }
    public function read()
    {

        $data['academic_year'] = AcademicYear::get();
        return view('admin.academiclist', $data);
    }
    public function delete($id)
    {
        AcademicYear::find($id)->delete();

        return redirect()->route('admin.academicyear.read')->with('success', 'Deleted Sucessfully');
    }
    public function edit(Request $req)
    {
        // Retrieve the academic year model instance by ID
        $data['academic_year'] = AcademicYear::find($req->id);

        // Pass the data to the view
        return view('admin.edit', $data);
    }

    public function update(Request $req)
    {
        $data = AcademicYear::find($req->id);
         $data->name = $req->name1;
         $data->update();
         $data['academic_year'] = AcademicYear::get();
         return view('admin.academiclist', $data);

    }
}
