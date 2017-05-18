@extends('master')
@section('content')
    <br>
<h3>Lista de carreras</h3>
<table class="table">
    @foreach($careers as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td><p class="font-italic">{{$c->faculty->name}}</p>
                </td>
            <td>
                <div class="row form-inline">

                        <a href="{{url('careers/'.$c->id)}}" class="btn btn-primary">
                            Ver
                        </a>
                        <span style="
                        width: 20px"></span>

                        <form action="{{url('careers/'.$c->id)}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>


                </div>

            </td>
        </tr>
    @endforeach
</table>
@endsection