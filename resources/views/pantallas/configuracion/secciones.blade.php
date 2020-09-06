@extends('layouts.app')

@section('content')
    <configuracion :secciones="{{$seccionesConf}}"></configuracion>
@endsection