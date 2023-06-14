<?php

namespace App\Http\Controllers;


use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
    
        return view('admindashboard',compact('teachers'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->address = $request->address;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email; 
        $teacher->speciality= $request->speciality;
        $teacher->uemail= $request->uemail;
        $teacher->upassword = $request->upassword;
        $teacher->save();

        // enregistrer les donneés dans la table users
        $user = new User;
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $fullName = $firstName.' '.$lastName;
        $user -> name = $fullName;
        $user-> email = $request->uemail;
        $user -> password = $request->upassword;
        $user -> role = 'teacher'; 
        $user ->save();

        // La redirection
        return redirect()->route('admindashboard');
    }
    
    public function edit(Teacher $teacher)
    {
        return view('editTeacher', compact('teacher'));
    }
    
    public function update(Request $request, Teacher $teacher)
    {
    $teacher->update($request->all());
        return redirect()->route('admindashboard'); 
    }
    

    public function delete($id)
{
        DB::delete('delete from teachers where id = ?', [$id]); 
        return redirect()->route('admindashboard');
}

    
}
