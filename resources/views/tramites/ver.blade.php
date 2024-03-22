@extends('layout.master')
@section('title',"index")
@section("content")

<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">

                <div class="card-header  bg-dark text-light">
                    {{$tramites->name}}
                </div>
                <?php
                $campos = array("procedureLink", "requestLink","field1","field2", "field3","field4","field5",
                                "field6","field7","field8","field9","field10","field11","field12", "field13",
                                "field14","field15");
                foreach ($campos as $campo) {
                        if (!isset($tramites->$campo)) {
                        $tramites->$campo = '';
                        }
                        }
                ?>

                <table class="table table-striped">
                    <tbody>
                        @foreach ( $campos as $campo )
                            @if ($campo == "procedureLink")
                                <tr> 
                                    <?php
                                    $url = $tramites->$campo ;
                                        if (strlen($url)>3) {
                                          echo" <td><a href=\"$url\"><b>Web link</b></a></td> ";
                                        }
                                    ?>
      
                                   
                                </tr>
                            @elseif ($campo == "requestLink")
                                <tr>
                                    <?php
                                    $url = $tramites->$campo ;
                                        if (strlen($url)>3) {
                                          echo" <td><a href=\"$url\"><b>Solicitud</b></a></td> ";
                                        }
                                    ?>
                                </tr>
                            @else
                                <tr> 
                                    <td>{{ $tramites->$campo}}</td>
                                </tr>
                            @endif                      
                        @endforeach  
                    </tbody>
                </table>



                <div class="card-body">

                    @if(session('info'))
                    <div class="alert alert-primary" role="alert">{{session('info')}}</div>
                    @endif

                </div>



            </div>
        </div>
    </div>
</div>

@endsection