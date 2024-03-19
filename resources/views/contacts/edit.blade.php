
@extends("layout.master")
@section('title',"edit")
@section("content")
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit contact

                </div>
                <div class="card-body">
                    <form action="{{route('contacts.update' ,$contacts->id )}}" method="POST">
                        @method('put')
                        @csrf

                         <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Documento</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="nif" value="{{ $contacts->nif}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="nombre1" value="{{ $contacts->nombre1}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Primer Apellido</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="apellido1" value="{{ $contacts->apellido1}}">
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Segundo Apellido</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="apellido2" value="{{ $contacts->apellido2}}">
                            </div>
                          </div>


                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">telfono</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="tel1" value="{{ $contacts->tel1}}">
                            </div>
                          </div>
          
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">CALLE</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="CALLE" value="{{ $contacts->CALLE}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NOCALLE</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="NOCALLE" value="{{ $contacts->NOCALLE}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">PISO</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="PISO" value="{{ $contacts->PISO}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">PUERTA</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="PUERTA" value="{{ $contacts->PUERTA}}">
                            </div>
                          </div>
            
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">CP</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="CP" value="{{ $contacts->CP}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">CIUDAD</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="CIUDAD" value="{{ $contacts->CIUDAD}}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">F Nacimiento</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"name="fn2" value="{{ $contacts->fn2}}">
                            </div>
                          </div>
    


                        <br>
                        <button class="btn btn-success " type="submit">Guardar</button>
                        <a href="{{route('contacts.index')}}" class="btn btn-danger">Cancelar</a>




 





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection