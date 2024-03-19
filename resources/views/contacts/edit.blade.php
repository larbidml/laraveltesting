@extends("layout.master")
@section('title',"edit")
@section("content")
<div class="container"><br>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Edit contact id:  {{ $contacts->id}}

        </div>
        <div class="card-body">
          <form action="{{route('contacts.update' ,$contacts->id )}}" method="POST">
            @method('put')
            @csrf

            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Documento</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="document" value="{{ $contacts->document}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">fecha de caducidad</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="expirationDate"
                  value="{{ $contacts->expirationDate}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="name" value="{{ $contacts->name}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Primer Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="firstSurname"
                  value="{{ $contacts->firstSurname}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Segundo Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="middleSurname"
                  value="{{ $contacts->middleSurname}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Teléfono</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="phone" value="{{ $contacts->phone}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Dirección</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="address" value="{{ $contacts->address}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Número catastral</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="cadastralNumber"
                  value="{{ $contacts->cadastralNumber}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Fecha de nacimiento</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="dateOfBirth"
                  value="{{ $contacts->dateOfBirth}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Tarjeta sanitaria</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="healthCard"
                  value="{{ $contacts->healthCard}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Familia numerosa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="largeFamilyCard"
                  value="{{ $contacts->largeFamilyCard}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="email" value="{{ $contacts->email}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Nota</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="note" value="{{ $contacts->note}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Pasaport</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="passport" value="{{ $contacts->passport}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Pasaporte caducidad</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="passportExpirationDate"
                  value="{{ $contacts->passportExpirationDate}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">familia id</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="familyId" value="{{ $contacts->familyId}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Lugar nacimiento</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="placeOfBirth"
                  value="{{ $contacts->placeOfBirth}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Nif soporte</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="nifSupport"
                  value="{{ $contacts->nifSupport}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Numero seguridad social</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="socialSecurityNumber"
                  value="{{ $contacts->socialSecurityNumber}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Drive link</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="driveLink" value="{{ $contacts->driveLink}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Cuenta Bancaria</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="bankAccount"
                  value="{{ $contacts->bankAccount}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Padre nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="parentName"
                  value="{{ $contacts->parentName}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label ">Madre nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control  " name="motherName"
                  value="{{ $contacts->motherName}}">
              </div>
            </div>







            <br>
            <button class="btn btn-success " type="submit">Guardar</button>
            <a href="{{route('contacts.ver',$contacts->id)}}" class="btn btn-danger">Cancelar</a>










          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection