@extends('layouts.app')

@section('title', "Comentarios do Usuario {{ $user->name }}")

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">
        Comentarios do Usuario {{ $user->name }}
        <a href="{{ route('comments.create', $user->id) }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
    </h1>

    <form action="{{ route('comments.index', $user->id) }}" method="get" class="py-5">
        <input type="text" name="search" placeholder="Pesquisar"
            class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
        <button
            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    </form>

    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Conteúdo
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Visível
                </th>
                <th
                    class=" text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Ação
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                        {{ $comment->body }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $comment->visible ? 'SIM' : 'NÃO' }}
                    </td>
                    <td class=" text-center px-5 py-5 border-b border-gray-200 bg-white text-sm">

                        <form action="{{ route('comments.destroy', ['user' => $user->id, 'id' => $comment->id]) }}" method="POST" class="">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}"
                                class="bg-green-200 rounded-full py-2 px-6">Editar</a>
                            <button type="submit"
                                class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="py-4">
        {{ $comments->appends([
            'search'=> request()->get('search', '')
        ])->links() }}
    </div>




@endsection
