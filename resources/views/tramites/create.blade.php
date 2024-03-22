@extends("layout.master")
@section('title',"create")
@section("content")

<form action="{{route('tramites.store')}}" method="POST">
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        crear nuevo Tramite

                    </div>
                    <div class="card-body">
                        @csrf
                        <?php
                        $campos = array("name","procedureLink", "requestLink","field1","field2", "field3","field4","field5",
                                        "field6","field7","field8","field9","field10","field11","field12", "field13",
                                        "field14","field15");

                        ?>
                        @foreach ( $campos as $campo )
                        @if ($campo == "name" || $campo == "procedureLink" || $campo == "requestLink")
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label "><b>{{$campo}}</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  " name="{{$campo}}">
                            </div>
                        </div>
                        @else
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control  " name="{{$campo}}">
                            </div>
                        </div>
                        @endif
                        @endforeach

                        <br>
                        <button class="btn btn-success " type="submit">Guardar</button>
                        <a href="{{route('indexpricipal')}}" class="btn btn-danger">Cancelar</a>


</form>
</div>
</div>
</div>
</div>
</div>





@endsection