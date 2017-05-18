@extends('master')
@section('content')
    <br>
    <div class="row justify-content-around">

            <div class="col">
                <h3>{{$career->name}}</h3>
                <h5>{{$career->faculty->name}}</h5>
            </div>
            <div class="col">
                <a href="{{url('careers/'.$career->id.'/edit')}}" class="btn btn-success">Editar</a>
            </div>



    </div>

    <br>
    <div class="row">
        <div class="col-8">
            <table class="table">
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td>{{$career->name}}</td>
                </tr>
                <tr>
                    <td><strong>Descripcion</strong></td>
                    <td>{{$career->description}}</td>
                </tr>
                <tr>
                    <td><strong>Facultad</strong></td>
                    <td>{{$career->faculty->name}}</td>
                </tr>
                <tr>
                    <td><strong>Director (a)</strong></td>
                    <td>{{$career->dean}}</td>
                </tr>

                <tr>
                    <td><strong>Ubicacion(lat)</strong></td>
                    <td>{{$career->location_lat}}</td>
                </tr>
                <tr>
                    <td><strong>Ubicacion(long)</strong></td>
                    <td>{{$career->location_long}}</td>
                </tr>
                <tr>
                    <td><strong>Direccion</strong></td>
                    <td>{{$career->address}}</td>
                </tr>
                <tr>
                    <td><strong>Telefonos</strong></td>
                    <td>{{$career->phone}}</td>
                </tr>
                <tr>
                    <td><strong>Facebook</strong></td>
                    <td>{{$career->social_facebook}}</td>
                </tr>
                <tr>
                    <td><strong>Twitter</strong></td>
                    <td>{{$career->social_twitter}}</td>
                </tr>
                <tr>
                    <td><strong>Pagina web</strong></td>
                    <td>{{$career->web_address}}</td>
                </tr>
                <tr>
                    <td><strong>Pensum</strong></td>
                    <td>{{$career->pensum_url}}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection