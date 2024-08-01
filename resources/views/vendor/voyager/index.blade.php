@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="app"></div>
            </div>
        </div>
        
    </div>
@stop

@section('javascript')
    @vite(['resources/js/app.js'])
@stop
