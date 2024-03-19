@extends("layout.master")
@section('title',"buscar")
@section("content")
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Buscar vuelo

                </div>
                <div class="card-body">
                    <form action="{{route('flights.buscar')}}" method="GET">
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