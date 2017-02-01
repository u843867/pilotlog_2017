@extends ('layout')

@section ('content')

    <h1>All Flights</h1>


    
    @foreach ($flights as $flight)

        <div>
            {{ $flight->from }}
        </div>    
    
    @endforeach

@stop

    