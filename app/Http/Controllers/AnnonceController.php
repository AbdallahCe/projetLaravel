<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
public function index()
    {
        $annonces = Annonce::all();
        $userRole = Auth::user()->role;
     
        return view('showAnnonces',compact('annonces', 'userRole'));
    }

    public function create()

    {
        $userRole = Auth::user()->role;
        $curr_name = Auth::user()->name;
        return view('createannonces' , compact('curr_name', 'userRole'));
    }

    public function store(Request $request)
    {
        $annonce = new Annonce;
        $annonce->nomPosteur = $request->nomPosteur;
        $annonce->message = $request->message;
        $annonce->filiere = $request->filiere;
        $annonce->save();

        // La redirection
        return redirect()->route('admindashboard.annonces');
    }
    
    public function edit(Annonce $annonce)
    {
        $userRole = Auth::user()->role;
        return view('editannonces', compact('annonce' , 'userRole'));
    }
    
    public function update(Request $request, Annonce $annonce)
    {
    $annonce->update($request->all());
        return redirect()->route('admindashboard.annonces'); 
    }
    

    public function delete($id)
    {
            DB::delete('delete from annonces where id = ?', [$id]); 
            return redirect()->route('admindashboard.annonces');
    }

}
