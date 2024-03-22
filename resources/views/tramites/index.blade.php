@extends('layout.master')
@section('title',"index")
@section("content")

    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header bg-dark text-light">
                        Listado de tramites
                        {{-- boton --}}
                        {{-- <a href="{{ route('products.create')}}" class="btn btn-success btn-sm float-end ">Nuevo producto</a> --}}
                        <a href="{{ route('tramites.create')}}" class="btn btn-success btn-sm float-end ">Nuevo Tramite</a>
                    </div>

                    <div class="card-body">
                        
                        @if(session('info'))
                        <div class="alert alert-primary" role="alert">{{session('info')}}</div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                            </thead>

                            <tbody>
                                @foreach ($tramites as $tramit )
                                <tr>
    
                                    <td>{{$tramit->name}}</td>
   
                                    <td> 
                                        {{-- boton ver --}}
                                        <a href="{{route('tramites.ver' , $tramit->id)}}"
                                            class="btn btn-secondary btn-sm ">Ver</a>
                                            
                                        {{-- boton edit --}}
                                        <a href="{{route('tramites.edit' , $tramit->id)}}"
                                            class="btn btn-warning btn-sm ">Editar</a>

                                        {{-- boton delete --}}
                                        {{-- <a href="javascript: document.getElementById('delete-{{$tramit->id}}').submit()"
                                            class="btn btn-danger btn-sm ">Eliminar</a>
                                        <form id="delete-{{$tramit->id}}"
                                            action="{{ route('tramites.destroy' , $tramit->id)}}" method="POST">
                                            @method('delete')
                                            @csrf --}}
    
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