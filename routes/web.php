<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Messenger\RunCommandContext;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

Route::get('/', function () {
    $flights = Flight::all();
    //$flights = Flight::orderBy('created_at', 'desc')->get();
    //return $flights ;
    return view('flights.index', compact('flights'));
});


Route::get('flights.index', function () {
    $flights = Flight::all();
    //$flights = Flight::orderBy('created_at', 'desc')->get();
    //return $flights ;
    return view('flights.index', compact('flights'));
})->name('flights.index');

Route::get('/flights/search', function () {
    return view('flights.search');
})->name('flights.search');



Route::get('flights', function (Request $request) {

    //return $request;
    $termino_busqueda = $request->input('termino_busqueda');
    $flights = Flight::where('origin', 'LIKE', '%' . $termino_busqueda . '%')->get();
    //$flights = Flight::orderBy('created_at', 'desc')->get();
    //return $flights ;
   return view('flights.index', compact('flights'));
   
})->name('flights.buscar');





//// contacts////////////////////////////////////////////

Route::get('/contacts/index', function () {
    return view('contacts.index');
})->name('contacts.index');


Route::get('/contacts/search', function () {
    return view('contacts.search');
})->name('contacts.search');

Route::get('/contacts/ver', function () {
    return view('contacts.search');
})->name('contacts.ver');

Route::get('contacts', function (Request $request) {
    $termino_busqueda = $request->input('termino_busqueda');
    $contacts = Contact::where('name', 'LIKE', '%' . $termino_busqueda . '%')
    ->orWhere('firstSurname', 'LIKE', '%' . $termino_busqueda . '%')
    ->orWhere('middleSurname', 'LIKE', '%' . $termino_busqueda . '%')
    ->orderBy('name')
    ->get();
   return view('contacts.index', compact('contacts'));
})->name('contacts.buscar');

Route::get('/contacts/{id}/edit', function ($id) {
    $contacts = Contact::findOrFail($id);
    //return $contacts;
    return view('contacts.edit', compact('contacts'));
})->name('contacts.edit');

Route::delete('/contacts/{id}', function ($id) {
    $contacts = Contact::findOrFail($id);
    $contacts->delete();
    return redirect()->route('contacts.index')->with('info', 'Flighto eliminado exitosamente');
})->name('contacts.destroy');

Route::put('/contacts/{id}', function (Request $request, $id) {
    $contacts = Contact::findOrFail($id);
    $contacts->nif = $request->input('nif');
    $contacts->nombre1 = $request->input('nombre1');
    $contacts->apellido1 = $request->input('apellido1');
    $contacts->apellido2 = $request->input('apellido2');
    $contacts->tel1 = $request->input('tel1');
    $contacts->CALLE = $request->input('CALLE');
    $contacts->NOCALLE = $request->input('NOCALLE');
    $contacts->PISO = $request->input('PISO');
    $contacts->PUERTA = $request->input('PUERTA');
    $contacts->CP = $request->input('CP');
    $contacts->CIUDAD = $request->input('CIUDAD');
    $contacts->fn2 = $request->input('fn2');



    $contacts->save();
    return redirect()->route('contacts.index')->with('info', 'contacts actualizado exitosamente');
})->name('contacts.update');

// Route::post('/products', function (Request $request) {

//     //return $request;
//     // $request es {"_token":"rBp6HgD34BSsl98uwaIsg3TsIsnWSk0nWTEqWL3W","description":"aple","price":"60"
//     $newProduct = new Product;
//     $newProduct->description = $request->input('description');
//     $newProduct->price = $request->input('price');
//     $newProduct->save();
//     return redirect()->route('products.index')->with('info', 'Producto creado exitosamente');
//     //  return $request->all();
// })->name('products.store');






// Route::get('/', function () {

//     $flights = Flight::where('origin', 'PARIS')->get();
 
//     $flights = $flights->reject(function (Flight $flight) {
//         return $flight->cancelled;
//     });
//     return view('flights.index', compact('flights'));
// })->name('flights.index');













Route::get('/Flight/{id}/edit', function ($id) {
    $Flight = Flight::findOrFail($id);
    return view('flights.edit', compact('flights'));
})->name('flights.edit');


Route::delete('/Flight/{id}', function ($id) {
    $Flight = Flight::findOrFail($id);
    $Flight->delete();
    return redirect()->route('flights.index')->with('info', 'Flighto eliminado exitosamente');
})->name('flights.destroy');



// Route::get('/Flight/create', function () {
//     return view('Flight.create');
// })->name('Flight.create');



// Route::post('/Flight', function (Request $request) {
//     $newFlight = new Flight;
//     $newFlight->description = $request->input('description');
//     $newFlight->price = $request->input('price');
//     $newFlight->save();
//     return redirect()->route('Flight.index')->with('info', 'Flighto creado exitosamente');

//     //  return $request->all();
// })->name('Flight.store');






// Route::put('/Flight/{id}', function (Request $request, $id) {
//     $Flight = Flight::findOrFail($id);
//     $Flight->description = $request->input('description');
//     $Flight->price = $request->input('price');
//     $Flight->save();
//     return redirect()->route('Flight.index')->with('info', 'Flighto actualizado exitosamente');
// })->name('Flight.update');

// // Route::get('/greeting', function () {

// //     return view('/greeting');
// // });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


////////////////////////
//////////////////////////


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');