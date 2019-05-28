@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <h1>Imagenes</h1>
                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label for="select">Seleccione la imagen: </label>
                    <select name="" id="selec">
                            <option value="urlexample.jpg">Seleccione una opcion</option>
                            @foreach($imagen as $img)
                            <option value="{{$img->image}}"> {{$img->nombre}} </option>
                            @endforeach
                        </select>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
                <div class="card" style="width: 35rem;">
                        <img src="" class="card-img-top" alt="" id="imagen">
                        <div class="card-body">
                          <p class="card-text text-center" id="tittle"></p>
                        </div>
                </div>
        </div>
    </div>
</body>
@endsection