@extends('master')
@section('content')
    <br>
<h3>Lista de facultades</h3>
<table class="table">
    @foreach($facs as $f)
        <tr>
            <td>{{$f->name}}</td>
            <td>
                <div class="row form-inline">

                        <a href="{{url('faculties/'.$f->id)}}" class="btn btn-primary">
                            Ver
                        </a>
                        <span style="width: 20px"></span>

                        <form action="{{url('faculties/'.$f->id)}}" method="post">
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