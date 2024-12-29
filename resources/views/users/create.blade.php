@extends('layouts.app')
@section('title' , 'Criar Usuarios')



@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
   Novo Usuários
</h1>

@include('includes.validations-form')

   <form action="{{ route('users.store') }}" method="POST">
    @include('users._partials.form')
   </form>

@endsection
