@extends('layouts.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <div class="">
        <h1>Lista de Eleitores</h1>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Aniversario</th>
                    <th>Endereco</th>
                    <th>Numero</th>
                    <th>Bairro</th>
                    <th>Acao</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($clients as $client)
                        <td>{{$client->name}}</td>
                        <td>{{$client->birthday}}</td>
                        <td>{{$client->street}}</td>
                        <td>{{$client->number}}</td>
                        <td>{{$client->neighborhood}}</td>
                        <td><a href="{{ route('client.show', $client->id) }}">Detalhes</a></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection