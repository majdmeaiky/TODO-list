<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

});
route::get('/tasks',[TaskController::class,'index'])->name('tasks.index');
route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');
route::get('/tasks/edit/{id}',[TaskController::class,'edit'])->name('tasks.edit');
 route::put('/tasks/{id}',[TaskController::class,'update'])->name('tasks.update');
 route::delete('/tasks/{id}',[TaskController::class,'destroy'])->name('tasks.delete');

require __DIR__.'/auth.php';



