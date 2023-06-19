<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ObjectiveController;
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
/* Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('welcome');
    } else {
        return view('login');
    }
})->name('home'); */

Route::get('/', function () {
    return redirect()->route('welcome');
})->name('home');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['phases'])->group(function () {    
    Route::resource('activities', ActivityController::class);
});


Route::middleware(['auth'])->group(function () {
    Route::middleware(['apis'])->group(function () {
        Route::get('/apis/welcome', function () {
            return view('apis.welcome');
        })->name('apis.welcome');        
        Route::get('/apis/search', [ApiController::class, 'search'])->name('apis.search');
        Route::get('/apis/{api}', [ApiController::class, 'show'])->name('apis.show');
    });
    Route::middleware(['activities'])->group(function () {
        Route::get('/objectives/show', [ObjectiveController::class, 'show'])->name('objectives.show');
        Route::post('/objectives/add', [ObjectiveController::class, 'addObjective'])->name('objectives.add');
        Route::post('/objectives/store', [ObjectiveController::class, 'store'])->name('objectives.store');
        Route::get('/objectives/welcome', function () {
            return view('objectives.welcome');
        })->name('objectives.welcome');
        Route::get('/objectives/search', [ObjectiveController::class, 'search'])->name('objectives.search');

    });
    Route::middleware(['sections'])->group(function () {
        Route::get('/sections/search', [SectionController::class, 'search'])->name('sections.search');
        Route::get('/sections/{section}/glossary/create', [GlossaryController::class, 'create'])->name('sections.glossary.create');
        Route::post('/sections/{section}/glossary', [GlossaryController::class, 'store'])->name('sections.glossary.store');
        Route::get('/sections/{section}/glossary/{term}', [GlossaryController::class, 'show'])->name('sections.glossary.show');
        Route::get('/sections/{section}/glossary/{term}/edit', [GlossaryController::class, 'edit'])->name('sections.glossary.edit');
        Route::put('/sections/{section}/glossary/{term}', [GlossaryController::class, 'update'])->name('sections.glossary.update');
        Route::delete('/sections/{section}/glossary/{term}', [GlossaryController::class, 'destroy'])->name('sections.glossary.destroy');
        Route::get('/sections/{section}/glossary', [GlossaryController::class, 'index'])->name('sections.glossary.index');
        Route::get('/sections/{section}/glossary/search', [GlossaryController::class, 'search'])->name('sections.glossary.search');

        Route::resource('sections', SectionController::class);
        Route::get('/glossary/welcome', function () {
            return view('glossary.welcome');
        })->name('glossary.welcome');
    });
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');      
    Route::get('welcome', function () {
        return view('welcome');
    })->name('welcome');
});



