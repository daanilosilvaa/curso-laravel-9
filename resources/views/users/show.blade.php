@extends('layouts.app')

@section('title' , 'Usuario')


@section('content')
    <h1>Usuario: {{ $user->name }}</h1>



    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>

    </ul>
@endsection
