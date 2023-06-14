<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
    
        return view('showfilieres',compact('filieres'));
    }

    public function create()
    {
        return view('createfiliere');
    }

    public function store(Request $request)
    {
        $filiere = new Filiere;
        $filiere->codeFiliere = $request->codeFiliere;
        $filiere->nomFiliere = $request->nomFiliere;
        $filiere->save();

        // La redirection
        return redirect()->route('admindashboard.filieres');
    }
    
    public function edit(Filiere $filiere)
    {
        return view('editfiliere', compact('filiere'));
    }
    
    public function update(Request $request, Filiere $filiere)
    {
    $filiere->update($request->all());
        return redirect()->route('admindashboard.filieres'); 
    }
    

    public function delete($id)
    {
            DB::delete('delete from filieres where id = ?', [$id]); 
            return redirect()->route('admindashboard.filieres');
    }
}
