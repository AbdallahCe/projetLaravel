<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmploiController extends Controller
{
    public function index()
    {
        $emplois = Emploi::all();
    
        return view('showEmploisTemps',compact('emplois'));
    }

    public function create()
    {
        return view('createemplois');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $emploi = new Emploi;
        $emploi->type =$request->type;
        $emploi->classe = $request->classe;
        $emploi->teacher = $request->teacher;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = 'uploads/' . $filename;
            $image->move(public_path('uploads'), $filename);
            $emploi->image = $path;
        }
    
        $emploi->save();


        // La redirection
        return redirect()->route('admindashboard.emploisTemps');
    }
    
    public function edit(Emploi $emploi)
    {
        return view('editemplois', compact('emploi'));
    }
    
    public function update(Request $request, Emploi $Emploi)
    {
    $Emploi->update($request->all());
        return redirect()->route('admindashboard.emploisTemps'); 
    }
    

    public function delete($id)
    {
            DB::delete('delete from emplois where id = ?', [$id]); 
            return redirect()->route('admindashboard.emploisTemps');
    }


    public function emploisTeacherIndex()
    {
        $emplois = Emploi::all();
        return view('showEmploisTemps',compact('emplois'));
    }
}
