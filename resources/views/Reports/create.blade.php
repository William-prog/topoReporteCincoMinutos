<form action="{{ url('/report') }}" method="post">
    @csrf
    @include('Reports.form',['modo'=>'Registrar'])
</form>