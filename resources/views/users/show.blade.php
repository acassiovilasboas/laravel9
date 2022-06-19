@extends('layouts.app')

@section('title', 'Listagem de usuário')

@section('content')
<h1>Listagem do usuario {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->created_at }}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button>Deletar Usuário</button>
</form>

@endsection