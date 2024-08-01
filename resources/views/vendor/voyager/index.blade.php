@extends('voyager::master')

@section('content')
    <div id="app"></div>        
@stop

@section('javascript')
    @vite(['resources/js/app.js'])
@stop
