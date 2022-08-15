@extends('layouts.app')
@section('title', 'Editar')
@section('content')
    <h1>Edição de Usuários</h1>
    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf

        @include('users._partials.form')
    </form>

@endsection
