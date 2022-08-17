@extends('layouts.app')
@section('title', 'Index')
@section('content')
    <div class="container px-md-5">

        <h1>Listagem de Usuários <a class="btn btn-success" href="{{ route('users.create') }}" role="button">New</a></h1>
        <form action="{{ route('users.index') }}" method="GET">
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" placeholder="Digite sua pesquisa..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="subimit" id="button-addon2">Pesquisar</button>
            </div>
        </form>

        <table class="table table-hover border bg-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Detalhes</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}">Detalhes</a></td>
                        <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
