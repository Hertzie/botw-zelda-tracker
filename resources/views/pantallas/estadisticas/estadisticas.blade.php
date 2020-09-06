@extends('layouts.app')

@section('content')
    <estadisticas :estadisticas="{{$estadisticas}}" :secciones="{{$secciones}}"></estadisticas>
@endsection