@extends('master')
@section('content')
    <br>
    <div class="row justify-content-around">

            <div class="col">
                <h3>{{$fac->name}}</h3>
            </div>
            <div class="col">
                <a href="{{url('faculties/'.$fac->id.'/edit')}}" class="btn btn-success">Editar</a>
            </div>



    </div>

    <br>
    <div class="row">
        <div class="col-8">
            <table class="table">
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td>{{$fac->name}}</td>
                </tr>
                <tr>
                    <td><strong>Descripcion</strong></td>
                    <td>{{$fac->description}}</td>
                </tr>
                <tr>
                    <td><strong>Decano (a)</strong></td>
                    <td>{{$fac->dean}}</td>
                </tr>
                <tr>
                    <td><strong>Vicedecano (a)</strong></td>
                    <td>{{$fac->dean2}}</td>
                </tr>
                <tr>
                    <td><strong>Ubicacion(lat)</strong></td>
                    <td>{{$fac->location_lat}}</td>
                </tr>
                <tr>
                    <td><strong>Ubicacion(long)</strong></td>
                    <td>{{$fac->location_long}}</td>
                </tr>
                <tr>
                    <td><strong>Direccion</strong></td>
                    <td>{{$fac->address}}</td>
                </tr>
                <tr>
                    <td><strong>Telefonos</strong></td>
                    <td>{{$fac->phone}}</td>
                </tr>
                <tr>
                    <td><strong>Facebook</strong></td>
                    <td>{{$fac->social_facebook}}</td>
                </tr>
                <tr>
                    <td><strong>Twitter</strong></td>
                    <td>{{$fac->social_twitter}}</td>
                </tr>
                <tr>
                    <td><strong>Pagina web</strong></td>
                    <td>{{$fac->web_address}}</td>
                </tr>
                <tr>
                    <td><strong>Convocatoria prefacultativo</strong></td>
                    <td>{{$fac->prefac_url}}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection