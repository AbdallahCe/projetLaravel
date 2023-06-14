<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
    
        return view('showModules',compact('modules'));
    }

    public function create()
    {
        return view('createModules');
    }

    public function store(Request $request)
    {
        $module = new Module;
        $module->codeModule = $request->codeModule;
        $module->nomModule = $request->nomModule;
        $module->masseHoraire = $request->masseHoraire;
        $module->coef = $request->coef;
        $module->save();

        // La redirection
        return redirect()->route('admindashboard.modules');
    }
    
    public function edit(Module $module)
    {
        return view('editmodules', compact('module'));
    }
    
    public function update(Request $request, Module $module)
    {
    $module->update($request->all());
        return redirect()->route('admindashboard.modules'); 
    }
    

    public function delete($id)
    {
            DB::delete('delete from modules where id = ?', [$id]); 
            return redirect()->route('admindashboard.modules');
    }
}
