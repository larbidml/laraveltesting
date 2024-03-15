<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\Console\Messenger\RunCommandContext;
use Illuminate\Http\Request;
use App\Models\Flight;
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
    return view('welcome');
});




////////////////////////
//////////////////////////


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('Flight.index');
// })->name('Flight.index');


Route::get('/', function () {
    // $Flight = Flight::all();
    $Flight = Flight::orderBy('created_at', 'desc')->get();
    //return $Flight ;
    return view('Flight.index', compact('Flight'));
})->name('Flight.index');



Route::get('/Flight/create', function () {
    return view('Flight.create');
})->name('Flight.create');



Route::post('/Flight', function (Request $request) {
    $newFlight = new Flight;
    $newFlight->description = $request->input('description');
    $newFlight->price = $request->input('price');
    $newFlight->save();
    return redirect()->route('Flight.index')->with('info', 'Flighto creado exitosamente');

    //  return $request->all();
})->name('Flight.store');

Route::delete('/Flight/{id}', function ($id) {
    $Flight = Flight::findOrFail($id);
    $Flight->delete();
    return redirect()->route('Flight.index')->with('info', 'Flighto eliminado exitosamente');
})->name('Flight.destroy');


Route::get('/Flight/{id}/edit', function ($id) {
    $Flight = Flight::findOrFail($id);
    return view('Flight.edit', compact('Flight'));
})->name('Flight.edit');

Route::put('/Flight/{id}', function (Request $request, $id) {
    $Flight = Flight::findOrFail($id);
    $Flight->description = $request->input('description');
    $Flight->price = $request->input('price');
    $Flight->save();
    return redirect()->route('Flight.index')->with('info', 'Flighto actualizado exitosamente');
})->name('Flight.update');

// Route::get('/greeting', function () {

//     return view('/greeting');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
