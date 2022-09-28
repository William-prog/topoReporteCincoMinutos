@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))

    {{ Session::get('mensaje') }}

    @endif
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Turno</th>
                <th>Horario</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $reportesGenerados)
            <tr>
                <td>{{$reportesGenerados->id}}</td>
                <td>{{$reportesGenerados->reportDate}}</td>
                <td>{{$reportesGenerados->reportTurn}}</td>
                <td>{{$reportesGenerados->reportSchedule}}</td>
                <td>
                    <a href="{{url('/report/'.$reportesGenerados->id.'/edit')}}">Editar</a>
                </td>
                <td>
                    <form action="{{ url('/report/'.$reportesGenerados->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar" onclick="return confirm('Quieres eliminar el registro?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection