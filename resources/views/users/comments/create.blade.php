@extends('layouts.app')
@section('title' , "Novo Comentário para Usuario {$user->name}")



@section('content')
    <h1>Novo Comentário para Usuario {{$user->name}}</h1>

@include('includes.validations-form')

   <form action="{{ route('comments.store', $user->id) }}" method="POST">
    @include('users.comments._partials.form')
   </form>

@endsection
