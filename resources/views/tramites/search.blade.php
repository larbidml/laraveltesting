@extends("layout.master")
@section('title',"buscar")
@section("content")
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Buscar  Tramite
                    {{-- boton --}}
                    <a href="{{ route('tramites.create')}}" class="btn btn-success btn-sm float-end ">Nuevo Tramite</a>
                </div>
                <div class="card-body bg-secondary text-light">
                    <form action="{{route('tramites.buscar')}}" method="GET" >
                        @csrf
                        <div class="form-group">
                            <label for="">nombre</label>
                            <input type="text" class="form-control" name="termino_busqueda" >
                        </div>

                        <br>
                        <button class="btn btn-success " type="submit">BUSCAR</button>
                        <a href="" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection