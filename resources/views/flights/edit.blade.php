
@extends("layout.master")
@section('title',"create")
@section("content")
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit producto

                </div>
                <div class="card-body">
                    <form action="{{route('products.update' ,$product->id )}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control" name="description" value="{{ $product->description}}">
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name="price" value="{{ $product->price}}">                           
                        </div>
                        <br>
                        <button class="btn btn-success " type="submit">Guardar</button>
                        <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
