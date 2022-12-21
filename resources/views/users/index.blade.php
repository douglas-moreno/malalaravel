@extends('layouts.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <div class="container-fluid text-center">

        <h1 class="">Listagem dos Usuarios <a href="{{ route('users.create') }}"><ion-icon name="add-circle-outline"></ion-icon></a> </h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td><a href="{{ route('users.edit', ['id'=>$user->id])}}"><ion-icon name="build-outline"></ion-icon></a></td>
                        <td><a href="{{ route('users.show', ['id'=>$user->id])}}"><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection