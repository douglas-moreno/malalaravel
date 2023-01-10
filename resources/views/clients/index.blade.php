@extends('layouts.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <h1 class="text-center text-2xl p-4">Lista de Eleitores</h1>

    <table class="table-auto border-separate border border-slate-500">
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
            @foreach ($clients as $client)
                <tr><td>{{$client->name}}</td>
                <td>{{$client->birthday}}</td>
                <td>{{$client->street}}</td>
                <td>{{$client->number}}</td>
                <td>{{$client->neighborhood}}</td>
                <td><a href="{{ route('client.show', $client->id) }}">Detalhes</a></td></tr>
            @endforeach                
        </tbody>
    </table>
@endsection