@extends('layouts.app')

@section('title', 'Criando usuário')

@section('content')

<h1>Cadastrando usuário</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>

@endsection
