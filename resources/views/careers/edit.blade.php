@extends('master')
@section('content')
    <br>

    <div class="row justify-content-center">

        <div class="col-10">
            <div class="card">
                <div class="card-block bg-info text-white">
                    FORMULARIO DE EDICION DE CARRERA
                </div>
            </div>
            <br>
            <form method="post" action="{{url('careers/'.$career->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Carrera</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->name}}" placeholder="Nombre carrera" id="example-text-input" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelect1" class="col-2 col-form-label">Facultad</label>
                    <div class="col-10">
                        <select class="form-control" id="exampleSelect1" name="facultyId">
                            <option value="" disabled selected>Seleccionar facultad</option>
                            @foreach($facs as $f)
                                <option value="{{$f->id}}" @if($career->facultyId==$f->id) selected @endif>{{$f->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Descripcion</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->description}}" placeholder="Descripcion de carrera" id="example-text-input" name="description">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Director (a)</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->dean}}" placeholder="Director o directora de carrera" id="example-text-input" name="dean">
                    </div>
                </div>



                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Ubicacion (latitud)</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$career->location_lat}}" placeholder="Latitud" id="example-text-input" name="location_lat">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Ubicacion (longitud)</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$career->location_long}}" placeholder="Longitud" id="example-text-input" name="location_long">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Direccion</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$career->address}}" placeholder="Direccion de carrera" id="example-text-input" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Telefono</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$career->phone}}" placeholder="Telefono de carrera" id="example-text-input" name="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Facebook</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->social_facebook}}" placeholder="Direccion Facebook" id="example-text-input" name="social_facebook">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Twitter</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->social_twitter}}" placeholder="Direccion Twitter" id="example-text-input" name="social_twitter">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Direccion web</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->web_address}}" placeholder="Pagina web" id="example-text-input" name="web_address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Pensum</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$career->pensum_url}}" placeholder="URL archivo pensum" id="example-text-input" name="pensum_url">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button class="btn btn-primary" type="submit">Guardar</button>

                </div>
            </form>
        </div>
    </div>
@endsection