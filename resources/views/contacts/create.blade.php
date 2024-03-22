@extends("layout.master")
@section('title',"create")
@section("content")

                    <form action="{{route('contacts.store')}}" method="POST">


                        @csrf
                        <div class="container"><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            crear contact

                                        </div>
                                        <div class="card-body">

                                            @csrf

                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Documento</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="document">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">fecha de caducidad</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="expirationDate">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Primer Apellido</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="firstSurname">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Segundo Apellido</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="middleSurname">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Teléfono</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="phone">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Dirección</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="address">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Número catastral</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="cadastralNumber">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Fecha de nacimiento</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="dateOfBirth">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Tarjeta sanitaria</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="healthCard">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Familia numerosa</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="largeFamilyCard">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Nota</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="note">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Pasaport</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="passport">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Pasaporte caducidad</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  "
                                                        name="passportExpirationDate">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">familia id</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="familyId">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Lugar nacimiento</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="placeOfBirth">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Nif soporte</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="nifSupport">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Numero seguridad social</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  "
                                                        name="socialSecurityNumber">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Drive link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="driveLink">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Cuenta Bancaria</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="bankAccount">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Padre nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="parentName">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label ">Madre nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  " name="motherName">
                                                </div>
                                            </div>







                                            <br>
                                            <button class="btn btn-success " type="submit">Guardar</button>
                                            <a href="{{route('indexpricipal')}}"
                                                class="btn btn-danger">Cancelar</a>










                    </form>
</div>
</div>
</div>
</div>
</div>





@endsection