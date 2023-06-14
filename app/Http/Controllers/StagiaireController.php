<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('showstagiaires', compact('stagiaires'));
    }
    public function create()
    {
        return view('createStagiaire');
    }

    public function store(Request $request)
    {
        $stagiaire = new Stagiaire;
        $stagiaire->cef = $request->cef;
        $stagiaire->first_name = $request->first_name;
        $stagiaire->last_name = $request->last_name;
        $stagiaire->address = $request->address;
        $stagiaire->phone = $request->phone;
        $stagiaire->gender = $request->gender;
        $stagiaire->email = $request->email; 
        $stagiaire->filiere= $request->filiere;
        $stagiaire->birthday = $request->birthday;
        $stagiaire->uemail= $request->uemail;
        $stagiaire->upassword = $request->upassword;
        $stagiaire->classe = $request->classe;

        $stagiaire->save();

        // enregistrer les donneés dans la table users
        $user = new User;
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $fullName = $firstName.' '.$lastName;
        $user -> name = $fullName;
        $user-> email = $request->uemail;
        $user -> password = $request->upassword;
        $user -> role = 'stagiaire'; 
        $user ->save();

        // La redirection
        return redirect()->route('admindashboard.stagiaires');
    }
    
    public function edit(Stagiaire $stagiaire)
    {
        return view('editstagiaire', compact('stagiaire'));
    }
    
    public function update(Request $request, Stagiaire $stagiaire)
    {
    $stagiaire->update($request->all());
        return redirect()->route('admindashboard.stagiaires'); 
    }
    

    public function delete($id)
    {
            DB::delete('delete from stagiaires where id = ?', [$id]); 
            return redirect()->route('admindashboard.stagiaires');
    }
}
