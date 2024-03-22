@extends('layout.master')
@section('title',"index")
@section("content")

    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        Listado de FAMILIA
                        {{-- boton --}}
                        {{-- <a href="{{ route('products.create')}}" class="btn btn-success btn-sm float-end ">Nuevo producto</a> --}}
                        {{-- <a href="" class="btn btn-success btn-sm float-end ">Nuevo Contacto</a> --}}
                    </div>

                    <div class="card-body">
                        
                        @if(session('info'))
                        <div class="alert alert-primary" role="alert">{{session('info')}}</div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <th>Documento</th>
                                <th>Nombre</th>
                            </thead>

                            <tbody>
                                @foreach ($contacts as $contact )
                                <tr>
    
                                    <td>{{$contact->document}}</td>
                                    <td>
                                        {{


                                        $contact->name ." ".
                                        $contact->firstSurname ." ".
                                        $contact->middleSurname
                                        }}
                                    </td>
                                    <td> 
                                        {{-- boton ver --}}
                                        <a href="{{route('contacts.ver' , $contact->id)}}"
                                            class="btn btn-secondary btn-sm ">Ver</a>
                                            
                                        {{-- boton edit --}}
                                        <a href="{{route('contacts.edit' , $contact->id)}}"
                                            class="btn btn-warning btn-sm ">Editar</a>

                                        {{-- boton delete --}}
                                        <a href="javascript: document.getElementById('delete-{{$contact->id}}').submit()"
                                            class="btn btn-danger btn-sm ">Eliminar</a>
                                        <form id="delete-{{$contact->id}}"
                                            action="{{ route('contacts.destroy' , $contact->id)}}" method="POST">
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