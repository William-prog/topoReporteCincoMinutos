<form action="{{ url('/report/'.$reportEdit->id)}}" method="post">
    @extends('layouts.app')

    @section('content')
    <div class="container">
        @csrf

        {{ method_field('PATCH') }}

        @include('Reports.form',['modo'=>'Capturar'])
    </div>
    @endsection

</form>