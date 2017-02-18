@extends ('layout') @section ('content')

<h1>Add a new flight</h1>

<form class="col s12">

    <div class="row">
        <div class="input-field col s6">
            <input id="date" type="text" class="validate datepicker">
            <label for="date">Date of Departure</label>

        </div>
    </div>

    <div class="row">
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
            <input id="aircraft_type" type="text" class="validate">
            <label for="to">Aircraft</label>
        </div>
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
            <input id="day_takeoffs" type="text" class="validate">
            <label for="day_takeoffs">Takeoffs (Day)</label>
        </div>
        <div class="input-field col s6">
            <input id="day_landings" type="text" class="validate">
            <label for="day_landings">Landings (Night)</label>
        </div>

    </div>
</form>



<div class="input-field col s6">
    <input id="time_of_dep" type="text" class="validate">
    <label for="to">Time of Departure</label>
</div>
</div>

@stop