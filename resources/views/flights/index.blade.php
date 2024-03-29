@extends('layout.master')
@section('title',"index")
@section("content")

    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        Listado vuelos
                        {{-- boton --}}
                        {{-- <a href="{{ route('products.create')}}" class="btn btn-success btn-sm float-end ">Nuevo producto</a> --}}
                        <a href="" class="btn btn-success btn-sm float-end ">Nuevo producto</a>
                    </div>

                    <div class="card-body">
                        
                        @if(session('info'))
                        <div class="alert alert-primary" role="alert">{{session('info')}}</div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <th>flight_number</th>
                                <th>origin</th>
                                <th>destination</th>
                                <th>departure_time</th>
                                <th>arrival_time</th>
                                <th>capacity</th>
                                <th>cancelled</th>
                            </thead>

                            <tbody>
                                @foreach ($flights as $flight )
                                <tr>
    
                                    <td>{{$flight->flight_number}}</td>
                                    <td>{{$flight->origin}}</td>
                                    <td>{{$flight->destination}}</td>
                                    <td>{{$flight->departure_time}}</td>
                                    <td>{{$flight->arrival_time}}</td>
                                    <td>{{$flight->capacity}}</td>
                                    <td>{{$flight->cancelled}}</td>




                                    <td>
                                        {{-- boton edit --}}
                                        <a href="{{route('flights.edit' , $flight->id)}}"
                                            class="btn btn-warning btn-sm ">Editar</a>

                                        {{-- boton delete --}}
                                        <a href="javascript: document.getElementById('delete-{{$flight->id}}').submit()"
                                            class="btn btn-danger btn-sm ">Eliminar</a>
                                        <form id="delete-{{$flight->id}}"
                                            action="{{ route('flights.destroy' , $flight->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
    
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
    
                            </tbody>
                        </table>
                    </div>
    


                </div>
            </div>
        </div>
    </div>

@endsection