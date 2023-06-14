<?php

use App\Models\Emploi;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StagiaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
});

Route::get('/filieres', function () {
    return view('filieres');
});
Route::get('/contact', function () {
    return view('contact');
});



// testing 

Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');

Route::get('/teacherdashboard', function () {
    return view('teacherdashboard');
});
Route::get('/studentdashboard', function () {
    return view('studentdashboard');
});

Route::middleware('admin')->group(function () {

    // Enseignant 
    Route::get('/admindashboard', [TeacherController::class,'index'])->name('admindashboard');

    Route::get('/teachers/create', [TeacherController::class,'create'])->name('teachers.create');
    Route::post('/teachers', [TeacherController::class,'store'])->name('teachers.store');

    Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');

    Route::get('/teachers/{teacher}', [TeacherController::class, 'delete'])->name('teachers.destroy');

    // Stagiaires 

    Route::get('/admindashboard/stagiaires', [StagiaireController::class,'index'])->name('admindashboard.stagiaires');
    Route::get('/stagiaires/create', [StagiaireController::class,'create'])->name('stagiaires.create');
    Route::post('/stagiaires', [StagiaireController::class,'store'])->name('stagiaires.store');
    Route::get('/stagiaires/{stagiaire}/edit', [StagiaireController::class, 'edit'])->name('stagiaires.edit');
    Route::put('/stagiaires/{stagiaire}', [StagiaireController::class, 'update'])->name('stagiaires.update');
    Route::get('/stagiaires/{stagiaire}', [StagiaireController::class, 'delete'])->name('stagiaires.destroy');

    // Filiers
    Route::get('/admindashboard/filieres', [FiliereController::class,'index'])->name('admindashboard.filieres');
    Route::get('/filieres/create', [FiliereController::class,'create'])->name('filieres.create');
    Route::post('/filieres', [FiliereController::class,'store'])->name('filieres.store');
    Route::get('/filieres/{filiere}/edit', [FiliereController::class, 'edit'])->name('filieres.edit');
    Route::put('/filieres/{filiere}', [FiliereController::class, 'update'])->name('filieres.update');
    Route::get('/filieres/{filiere}', [FiliereController::class, 'delete'])->name('filieres.destroy');



    // Modules
    Route::get('/admindashboard/modules', [ModuleController::class,'index'])->name('admindashboard.modules');
    Route::get('/modules/create', [ModuleController::class,'create'])->name('modules.create');
    Route::post('/modules', [ModuleController::class,'store'])->name('modules.store');
    Route::get('/modules/{module}/edit', [ModuleController::class, 'edit'])->name('modules.edit');
    Route::put('/modules/{module}', [ModuleController::class, 'update'])->name('modules.update');
    Route::get('/modules/{module}', [ModuleController::class, 'delete'])->name('modules.destroy');


    // Annonces
    Route::get('/admindashboard/annonces', [AnnonceController::class,'index'])->name('admindashboard.annonces');
    Route::get('/annonces/create', [AnnonceController::class,'create'])->name('annonces.create');
    Route::post('/annonces', [AnnonceController::class,'store'])->name('annonces.store');
    Route::get('/annonces/{annonce}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
    Route::put('/annonces/{annonce}', [AnnonceController::class, 'update'])->name('annonces.update');
    Route::get('/annonces/{annonce}', [AnnonceController::class, 'delete'])->name('annonces.destroy');



    // EmploisTemps

    Route::get('/admindashboard/emplois', [EmploiController::class,'index'])->name('admindashboard.emploisTemps');
    Route::get('/emplois/create', [EmploiController::class,'create'])->name('emplois.create');
    Route::post('/emplois', [EmploiController::class,'store'])->name('emplois.store');
    Route::get('/emplois/{emploi}/edit', [EmploiController::class, 'edit'])->name('emplois.edit');
    Route::put('/emplois/{emploi}', [EmploiController::class, 'update'])->name('emplois.update');
    Route::get('/emplois/{emploi}', [EmploiController::class, 'delete'])->name('emplois.destroy');


    
});


// TEACHER ROUTES 
Route::middleware('teacher')->group(function () {

    Route::get('/teacher/teacherdashboard', function(){
        $teacherId = Auth::user()->name;
        return view("teacher\\teacherdashboard", compact('teacherId'));
    })->name('mesClasses');

    //Annonce

    Route::get('/teacher/annonces', function(){
        $annonces = Annonce::all();
        return view("teacher\\showannoncesT", compact('annonces'));
    })->name('showannoncesT');


    // Emploi 

    Route::get('/teacher/emploistemps', function(){
        $emplois = Emploi::all();
        $teacherName = Auth::user()->name;
        return view("teacher\\showemploisT" , compact('emplois', 'teacherName'));
    })->name('showemploisT');

});


// Stagiaire routes 

    Route::middleware('stagiaire')->group(function () {
        Route::get('/stagiaire/stagiairedashboard', function(){
            
            $stagiaireName = Auth::user()->name;
            return view("stagiaire\\stagiairedashboard", compact('stagiaireName'));
        })->name('homeStagiaire');

        Route::get('/stagiaire/annonces', function(){
            $annonces = Annonce::all();
            return view("stagiaire\\showannoncesStag", compact('annonces'));
        })->name('showannoncesStag');
    
        Route::get('/stagiaire/emploistemps', function(){
            $emplois = Emploi::all();
            return view("stagiaire\\showemploisStag" , compact('emplois'));
        })->name('showemploisStag');

});