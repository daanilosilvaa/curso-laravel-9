<h1>Listas de Usuarios</h1>

<ul>
    @foreach ($users as $user)

        <li>
            {{ $user->name }} -
            {{ $user->email }} | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>


    @endforeach
</ul>
