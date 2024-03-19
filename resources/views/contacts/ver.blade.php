@extends('layout.master')
@section('title',"index")
@section("content")

<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    Ver Contacto
                    <a href="" class="btn btn-success btn-sm float-end ">ver Contacto</a>
                </div>

                <table class="table table-striped">
                    <tbody>

                        <tr>
                            <th class=" col-lg-2  ">document</th>
                            <td>{{ $contacts->document}}</td>


                            <th class=" col-lg-2  ">expirationDate</th>
                            <td>
                            <?PHP  
                            $expirationDate =  $contacts->expirationDate;                         
                            $expirationDate =  $expirationDate[8] . $expirationDate[9] ."/" .
                            $expirationDate[5] . $expirationDate[6] ."/" .
                            $expirationDate[0] . $expirationDate[1] . $expirationDate[2] . $expirationDate[3];
                            echo $expirationDate ;
                            ?>
                            </td>


                        </tr>

                        <tr>
                            <th class=" col-lg-2  ">name</th>
                            <td><b>{{ $contacts->name}} {{ $contacts->firstSurname}} {{ $contacts->middleSurname}}</b>
                            </td>
                            <th></th>
                            <td></td>
                           
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">phone</th>
                            <td>{{ $contacts->phone}}</td>
                            <th></th>
                            <td></td>
                        </tr>

                        <tr>
                            <th class=" col-lg-2  ">address</th>
                            <td>{{ $contacts->address}}</td>
                            <th class=" col-lg-2  ">cadastralNumber</th>
                            <td>{{ $contacts->cadastralNumber}}</td>
                        </tr>
                        <tr>
                     <th class=" col-lg-2  ">dateOfBirth</th>
                            <td>
                            <b>
                                <?PHP  
                                    $dateOfBirth =  $contacts->dateOfBirth;                         
                                    $dateOfBirth =  $dateOfBirth[8] . $dateOfBirth[9] ."/" .
                                    $dateOfBirth[5] . $dateOfBirth[6] ."/" .
                                    $dateOfBirth[0] . $dateOfBirth[1] . $dateOfBirth[2] . $dateOfBirth[3];
                                    echo $dateOfBirth ;
                                  ?>
                            </b>
                            </td>



                            <th class=" col-lg-2  ">Edad</th>
                            <td>
                                <?PHP  
                                Blade::include('includes.input', 'input');        
                                    $nacimiento = new DateTime( $contacts->dateOfBirth);
                                    $ahora = new DateTime(date("Y-m-d"));
                                    $diferencia = $ahora->diff($nacimiento);
                                    echo $diferencia->format("%y");
                                    $contacts->dateOfBirth;
                                ?>
                            </td>
                        </tr>


                        <tr>
                            <th class=" col-lg-2  ">bankAccount</th>
                            <td>{{ $contacts->bankAccount}}</td>
                            <th></th>
                            <td></td>
                        </tr>

                        <tr>
                            <th class=" col-lg-2  ">healthCard</th>
                            <td>{{ $contacts->healthCard}}</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">largeFamilyCard</th>
                            <td>{{ $contacts->largeFamilyCard}}</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">email</th>
                            <td>{{ $contacts->email}}</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">note</th>
                            <td>{{ $contacts->note}}</td>
                            <th></th>
                            <td></td>
                        </tr>

                        <tr>
                            <th class=" col-lg-2  ">passport</th>
                            <td>{{ $contacts->passport}}</td>
                            <th class=" col-lg-2  ">passportExpirationDate</th>

                            <td>
                                    <?PHP  
                                        $passportExpirationDate =  $contacts->passportExpirationDate;                         
                                        $passportExpirationDate =  $passportExpirationDate[8] . $passportExpirationDate[9] ."/" .
                                        $passportExpirationDate[5] . $passportExpirationDate[6] ."/" .
                                        $passportExpirationDate[0] . $passportExpirationDate[1] . $passportExpirationDate[2] . $passportExpirationDate[3];
                                        echo $passportExpirationDate ;
                                      ?>
                                </td>









                        </tr>

                        <tr>
                            <th class=" col-lg-2  ">familyId</th>
                            <td>{{ $contacts->familyId}}</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">placeOfBirth</th>
                            <td>{{ $contacts->placeOfBirth}}</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">nifSupport</th>
                            <td>{{ $contacts->nifSupport}}</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">socialSecurityNumber</th>
                            <td>{{ $contacts->socialSecurityNumber}}</td>
                            <th></th>
                            <td></td>
                        </tr>








                        <tr>
                            <th class=" col-lg-2  ">parentName</th>
                            <td>{{ $contacts->parentName}}</td>

                            <th class=" col-lg-2  ">motherName</th>
                            <td>{{ $contacts->motherName}}</td>
                        </tr>
                        <tr>
                            <th class=" col-lg-2  ">driveLink</th>
                            <td><a href="{{ $contacts->driveLink}}/"><b>drive link</b></a></td>
                            <th></th>
                            <td></td>
                        </tr>
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