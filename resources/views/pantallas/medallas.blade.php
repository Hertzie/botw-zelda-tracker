@extends('layouts.app')

@section('content')
    <medallas :medallas="{{$medallas}}"></medallas>
@endsection