@extends('layouts.app')

@section('title', 'Criando usuário')

@section('content')

<h1>Cadastrando usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>

@endsection
