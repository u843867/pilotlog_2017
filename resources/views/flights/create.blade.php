@extends ('layout')

@section ('content')

    <h1>Add a new flight</h1>


    <div class="row">
    <form class="col s12">
        <div class="input-field col s6">
          <input id="from" type="text" class="validate">
          <label for="from">From</label>
        </div>
        <div class="input-field col s6">
          <input id="to" type="text" class="validate">
          <label for="to">To</label>
        </div>
      </div>

    <div class="row">
        <div class="input-field col s6">
          <input id="date" type="text" class="validate datepicker">
          <label for="date">Date of Departure</label>
        </div>
        <div class="input-field col s6">
          <input id="to" type="text" class="validate">
          <label for="to">To</label>
        </div>
      </div>

    <div class="row">
        <div class="input-field col s6">
          <input id="dep_time" type="text" class="validate">
          <label for="dep_time">Departure Time</label>
        </div>
        <div class="input-field col s6">
          <input id="arr_time" type="text" class="validate">
          <label for="arr_time">Arrival Time</label>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s6">
          <input id="ac_type" type="text" class="validate">
          <label for="ac_type">Departure Time</label>
        </div>
        
      </div>
    </form>

@stop

    