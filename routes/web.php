<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Messenger\RunCommandContext;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Contact;
use App\Models\Tramit;

use Illuminate\Database\Eloquent\Collection;

Route::get('/', function () {
    return view('index');
})->name('indexpricipal');


Route::get('flights.index', function () {
    return view('flights.index', compact('flights'));
})->name('flights.index');

Route::get('/flights/search', function () {
    return view('flights.search');
})->name('flights.search');



Route::get('flights', function (Request $request) {
    //return $request;
    $termino_busqueda = $request->input('termino_busqueda');
    $flights = Flight::where('origin', 'LIKE', '%' . $termino_busqueda . '%')->get();
    return view('flights.index', compact('flights'));
})->name('flights.buscar');



Route::get('/Flight/{id}/edit', function ($id) {
    $Flight = Flight::findOrFail($id);
    return view('flights.edit', compact('flights'));
})->name('flights.edit');


Route::delete('/Flight/{id}', function ($id) {
    $Flight = Flight::findOrFail($id);
    $Flight->delete();
    return redirect()->route('flights.index')->with('info', 'Flighto eliminado exitosamente');
})->name('flights.destroy');






//// contacts////////////////////////////////////////////////////////////////

Route::get('/contacts/index', function () {
    return view('contacts.index');
})->name('contacts.index');


Route::get('/contacts/search', function () {
    return view('contacts.search');
})->name('contacts.search');

Route::get('/contacts/{id}/ver', function ($id) {
    $contacts = Contact::findOrFail($id);
    //return $contacts;
    return view('contacts.ver', compact('contacts'));
})->name('contacts.ver');

Route::get('contacts', function (Request $request) {
    $termino_busqueda = $request->input('termino_busqueda');
    $contacts = Contact::where('name', 'LIKE', '%' . $termino_busqueda . '%')
        ->orWhere('firstSurname', 'LIKE', '%' . $termino_busqueda . '%')
        ->orWhere('middleSurname', 'LIKE', '%' . $termino_busqueda . '%')
        ->orWhere('document', 'LIKE', '%' . $termino_busqueda . '%')
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
    return redirect()->route('indexpricipal')->with('info', 'contacto eliminado exitosamente');
})->name('contacts.destroy');

Route::put('/contacts/{id}', function (Request $request, $id) {
    $contacts = Contact::findOrFail($id);

    $contacts->document = $request->input('document');
    $contacts->expirationDate = $request->input('expirationDate');
    $contacts->name = $request->input('name');
    $contacts->firstSurname = $request->input('firstSurname');
    $contacts->middleSurname = $request->input('middleSurname');
    $contacts->phone = $request->input('phone');
    $contacts->address = $request->input('address');
    $contacts->cadastralNumber = $request->input('cadastralNumber');
    $contacts->dateOfBirth = $request->input('dateOfBirth');
    $contacts->healthCard = $request->input('healthCard');
    $contacts->largeFamilyCard = $request->input('largeFamilyCard');
    $contacts->email = $request->input('email');
    $contacts->note = $request->input('note');
    $contacts->passport = $request->input('passport');
    $contacts->passportExpirationDate = $request->input('passportExpirationDate');
    $contacts->familyId = $request->input('familyId');
    $contacts->placeOfBirth = $request->input('placeOfBirth');
    $contacts->nifSupport = $request->input('nifSupport');
    $contacts->socialSecurityNumber = $request->input('socialSecurityNumber');
    $contacts->driveLink = $request->input('driveLink');
    $contacts->bankAccount = $request->input('bankAccount');
    $contacts->parentName = $request->input('parentName');
    $contacts->motherName = $request->input('motherName');

    $campos = array( "document","name","firstSurname","middleSurname",
    "phone","address","cadastralNumber","healthCard","largeFamilyCard",
    "email","note","passport","familyId","placeOfBirth",
    "nifSupport","socialSecurityNumber","driveLink","bankAccount","parentName","motherName"
    );
    foreach ($campos as $campo) {
            if (!isset($contacts->$campo)) {
            $contacts->$campo = '';
            }
    }

    $camposdates = array( "expirationDate","dateOfBirth","passportExpirationDate");
  
    foreach ($camposdates as $camposdate) {
        if (!isset($contacts->$camposdate)) {
        $contacts->$camposdate = '0000-00-00';
        }
    }


    $contacts->save();
    //return $contacts;
    return redirect()->route('contacts.ver',$contacts->id)->with('info', 'contacts actualizado exitosamente');
})->name('contacts.update');

Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::post('/contacts', function (Request $request) {
    //return $request;
    $newContact = new Contact;
    $newContact->document = $request->input('document');
    $newContact->expirationDate = $request->input('expirationDate');
    $newContact->name = $request->input('name');
    $newContact->firstSurname = $request->input('firstSurname');
    $newContact->middleSurname = $request->input('middleSurname');
    $newContact->phone = $request->input('phone');
    $newContact->address = $request->input('address');
    $newContact->cadastralNumber = $request->input('cadastralNumber');
    $newContact->dateOfBirth = $request->input('dateOfBirth');
    $newContact->healthCard = $request->input('healthCard');
    $newContact->largeFamilyCard = $request->input('largeFamilyCard');
    $newContact->email = $request->input('email');
    $newContact->note = $request->input('note');
    $newContact->passport = $request->input('passport');
    $newContact->passportExpirationDate = $request->input('passportExpirationDate');
    $newContact->familyId = $request->input('familyId');
    $newContact->placeOfBirth = $request->input('placeOfBirth');
    $newContact->nifSupport = $request->input('nifSupport');
    $newContact->socialSecurityNumber = $request->input('socialSecurityNumber');
    $newContact->driveLink = $request->input('driveLink');
    $newContact->bankAccount = $request->input('bankAccount');
    $newContact->parentName = $request->input('parentName');
    $newContact->motherName = $request->input('motherName');

    $campos = array( "document","name","firstSurname","middleSurname",
                    "phone","address","cadastralNumber","healthCard","largeFamilyCard",
                    "email","note","passport","familyId","placeOfBirth",
                    "nifSupport","socialSecurityNumber","driveLink","bankAccount","parentName","motherName"
    );
    foreach ($campos as $campo) {
        if (!isset($newContact->$campo)) {
            $newContact->$campo = '';
        }

    }
    $camposdates = array( "expirationDate","dateOfBirth","passportExpirationDate");
  
    foreach ($camposdates as $camposdate) {
        if (!isset($newContact->$camposdate)) {
        $newContact->$camposdate = '0000-00-00';
        }
    }

    $newContact->save();
    return redirect()->route('indexpricipal')->with('info', 'Contacto creado exitosamente');
    //  return $request->all();
})->name('contacts.store');


Route::get('/contacts/{familyId}/familia', function ($familyId) {
    //$contacts = Contact::findOrFail($familyId);

    $contacts = Contact::where('familyId', 'LIKE',  $familyId )
    ->orderBy('dateOfBirth')
    ->get();
    return view('contacts.familia', compact('contacts'));
})->name('contacts.familia');



/////tramites/////////////////////////////////////////////////////////////////

Route::get('/tramites/', function () {
    return view('tramites.tramites');
})->name('tramites.tramites');

Route::get('/tramites/search', function () {
    return view('tramites.search');
})->name('tramites.search');

Route::get('/tramites/create', function () {
    return view('tramites.create');
})->name('tramites.create');

Route::get('tramites', function (Request $request) {
    $termino_busqueda = $request->input('termino_busqueda');
    $tramites = Tramit::where('name', 'LIKE', '%' . $termino_busqueda . '%')
        ->orderBy('name')
        ->get();
    //return $tramites;
    return view('tramites.index', compact('tramites'));
})->name('tramites.buscar');

Route::get('/tramites/{id}/ver', function ($id) {
    $tramites = Tramit::findOrFail($id);
    //return $tramites;
    return view('tramites.ver', compact('tramites'));
})->name('tramites.ver');

Route::get('/tramites/{id}/edit', function ($id) {
    $tramites = Tramit::findOrFail($id);
    //return $tramites;
    return view('tramites.edit', compact('tramites'));
})->name('tramites.edit');

Route::delete('/tramites/{id}', function ($id) {
    $tramites = Tramit::findOrFail($id);
    $tramites->delete();
    return redirect()->route('indexpricipal')->with('info', 'contacto eliminado exitosamente');
})->name('tramites.destroy');


Route::get('/tramites/{id}/edit', function ($id) {
    $tramites = Tramit::findOrFail($id);
    //return $tramites;
    return view('tramites.edit', compact('tramites'));
})->name('tramites.edit');

Route::put('/tramites/{id}', function (Request $request, $id) {
    $tramites = Tramit::findOrFail($id);

    $campos = array("name","procedureLink", "requestLink","field1","field2", "field3","field4","field5",
    "field6","field7","field8","field9","field10","field11","field12", "field13",
    "field14","field15");

    foreach ($campos as $campo) {
        $tramites->$campo = $request->input($campo);
      }


    $campos = array("name","procedureLink", "requestLink","field1","field2", "field3","field4","field5",
    "field6","field7","field8","field9","field10","field11","field12", "field13",
    "field14","field15");
    foreach ($campos as $campo) {
        if (!isset($tramites->$campo)) {
        $tramites->$campo = '';
        }
    }

	

    //return $tramites;
    $tramites->save();
    
    return redirect()->route('tramites.ver',$tramites->id)->with('info', 'tramites actualizado exitosamente');
})->name('tramites.update');


Route::get('/tramites/create', function () {
    return view('tramites.create');
})->name('tramites.create');

Route::post('/tramites', function (Request $request) {
    //return $request;
    $newTramit = new Tramit;
    $campos = array("name","procedureLink", "requestLink","field1","field2", "field3","field4","field5",
    "field6","field7","field8","field9","field10","field11","field12", "field13",
    "field14","field15");
    foreach ($campos as $campo) {
        $newTramit->$campo = $request->input($campo);
      }
    $campos = array("name","procedureLink", "requestLink","field1","field2", "field3","field4","field5",
    "field6","field7","field8","field9","field10","field11","field12", "field13",
    "field14","field15");
    foreach ($campos as $campo) {
        if (!isset($newTramit->$campo)) {
        $newTramit->$campo = '--';
        }
    }
    //return $newTramit;
    $newTramit->save();
    return redirect()->route('indexpricipal')->with('info', 'Tramito creado exitosamente');
    //  return $request->all();
})->name('tramites.store');










// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');