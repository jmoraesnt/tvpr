@extends('layouts.app')
@section('title', 'Criar')
@section('content')
    <h1>Criação de Usuários</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users._partials.form')
    </form>

@endsection
