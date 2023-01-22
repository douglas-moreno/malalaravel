@extends('layouts.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <h1 class="text-center text-2xl p-4">Lista de Eleitores</h1>
    <div class="flex items-center justify-between flex-wrap">
        <table class="table-auto border">
            <thead>
                <tr>
                    <th class="py-2 border border-slate-800">Nome</th>
                    <th class="py-2 border border-slate-800">Aniversario</th>
                    <th class="py-2 border border-slate-800">Endereco</th>
                    <th class="py-2 border border-slate-800">Numero</th>
                    <th class="py-2 border border-slate-800">Bairro</th>
                    <th class="py-2 border border-slate-800">Acao</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($clients as $client)
                    <tr><td class="border border-slate-500">{{$client->name}}</td>
                    <td class="border border-slate-500">{{$client->birthday}}</td>
                    <td class="border border-slate-500">{{$client->street}}</td>
                    <td class="border border-slate-500">{{$client->number}}</td>
                    <td class="border border-slate-500">{{$client->neighborhood}}</td>
                    <td class="border border-slate-500"><a href="{{ route('client.show', $client->id) }}">Detalhes</a></td></tr>
                @endforeach                
            </tbody>
        </table>
    </div>
@endsection