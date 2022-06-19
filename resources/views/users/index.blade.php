@extends('layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
<h1>
    Listagem de usuários
    <a href="{{ route('users.create') }}">criar usuário</a>
</h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <input type="submit" value="Pesquisar">
</form>

    @foreach($users as $user)
        <li>
            {{ $user->name }} - {{ $user->email }}
            | <a href="{{route('users.show', ['id' => $user->id])}}">Detalhes</a>
            | <a href="{{route('users.edit', ['id' => $user->id])}}">Editar</a>
        </li>
    @endforeach

@endsection
