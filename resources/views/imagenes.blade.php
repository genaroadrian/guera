@extends('layout')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-6">
                <form  action="{{route ('saveimagen')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="nombre">Nombre de la imagen:</label>
                    <input type="text" class="form-control col-6" id="exampleInputEmail1" placeholder="Titulo de la imagen" name="nombre">
                    <br>
                    <label for="img">Seleccione la imagen: </label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
                    <br><br>
                    <input type="submit" class="btn btn-info">
                </form>
           </div>
       </div>
   </div>
@endsection

