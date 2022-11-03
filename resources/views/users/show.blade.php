@extends('layout')

@section('title', "Usuario {$id}")

@section('content')
    <h1 style="margin-top: 100px;">Usuario #{{ $id }}</h1>

    Mostrando detalle del usuario: {{ $id }}
@endsection