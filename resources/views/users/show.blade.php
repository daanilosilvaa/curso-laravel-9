@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do usuário {{ $user->name }}</h1>

<ul>
    @if ($user->image)
    <img src="{{ url("storage/{$user->image}") }}" alt=" {{ $user->name }}" class="objet-cover w-20">
 @else
 <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
     <div class="flex shrink-0 items-center">
         <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
             alt="Your Company">
     </div>
@endif
    <li><strong>NOME:</strong> {{ $user->name }}</li>
    <li><strong>E-MAIL:</strong> {{ $user->email }}</li>
</ul>
<form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
    @method('DELETE')
    @csrf
    <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
</form>

@endsection
