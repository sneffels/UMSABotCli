@extends('master')
@section('content')
    <br>
    <div class="row justify-content-center">

        <div class="col-10">
            <div class="card">
                <div class="card-block bg-info text-white">
                    FORMULARIO DE EDICION DE FACULTAD
                </div>
            </div>
            <br>
            <form method="post" action="{{url('faculties/'.$fac->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Facultad</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$fac->name}}" placeholder="Nombre facultad" id="example-text-input" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Descripcion</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$fac->description}}" placeholder="Descripcion de facultad" id="example-text-input" name="description">
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col ">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Decano (a)</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$fac->dean}}" placeholder="Decano o decana" id="example-text-input" name="dean">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Vicedecano (a)</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$fac->dean2}}" placeholder="Vicedecano o vicedecana" id="example-text-input" name="dean2">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Ubicacion (latitud)</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$fac->location_lat}}" placeholder="Latitud" id="example-text-input" name="location_lat">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Ubicacion (longitud)</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$fac->location_long}}" placeholder="Longitud" id="example-text-input" name="location_long">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Direccion</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$fac->address}}" placeholder="Direccion de facultad" id="example-text-input" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Telefono</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="{{$fac->phone}}" placeholder="Telefono de facultad" id="example-text-input" name="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Facebook</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$fac->social_facebook}}" placeholder="Direccion Facebook" id="example-text-input" name="social_facebook">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Twitter</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$fac->social_twitter}}" placeholder="Direccion Twitter" id="example-text-input" name="social_twitter">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Direccion web</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$fac->web_address}}" placeholder="Pagina web" id="example-text-input" name="web_address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Convocatoria Prefacultativo</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{$fac->prefac_url}}" placeholder="URL archivo convocatoria" id="example-text-input" name="prefac_url">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button class="btn btn-primary" type="submit">Guardar</button>

                </div>
            </form>
        </div>
    </div>
@endsection