@extends('layouts.app')
@section('title' , 'Criar Usuarios')



@section('content')
    <h1>Novo Usuario</h1>

   <form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="Nome:">
    <input type="email" name="email" id="" placeholder="Email:">
    <input type="password" name="password" id="" placeholder="Senha:">
    <button type="submit">Enviar</button>
   </form>
@endsection
