@extends('layouts.app')
@section('title' , 'Editar Usuario')



@section('content')
    <h1>Editar Usuario {{ $user->name }}</h1>

    @if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

   <form action="{{ route('users.update',$user->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" id="" placeholder="Nome:" value="{{$user->name}}">
    <input type="email" name="email" id="" placeholder="Email:" value="{{ $user->email }}">
    <input type="password" name="password" id="" placeholder="Senha:">
    <button type="submit">Enviar</button>
   </form>
@endsection
