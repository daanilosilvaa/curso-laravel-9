@extends('layouts.app')
@section('title' , 'Listas de Usuarios')



@section('content')
    <h1>Listas de Usuarios
        <a href="{{ route('users.create') }}">+</a>
    </h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection
