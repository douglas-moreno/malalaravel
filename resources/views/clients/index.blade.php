@extends('layouts.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <h1 class="text-center text-4xl pb-4 text-indigo-500">Lista de Eleitores</h1>

    <form class="w-full p-2" method="GET" action="{{route('client.index')}}">
        <label class="text-center" for"search">Perquisar</label>
        <input class="rounded h-8 w-1/2 p-2" type="search" id="search" name="search" placeholder="Pesquisa por Nome ou CEP...">
        <input class="px-2 rounded border border-black h-8 hover:bg-indigo-200 hover:text-indigo-500 transition duration-500" type="submit" value="Pesquisar">
        <input class="px-2 rounded border border-black h-8 hover:bg-indigo-200 hover:text-red-500 transition duration-500" type="reset" value="Limpar">
    </form>

    <div class="items-center justify-between flex-wrap rounded border-b p-2">
        <table class="min-w-full bg-white">
            <thead class="bg-slate-200">
                <tr>
                    <th class="border border-slate-800">Nome</th>
                    <th class="border border-slate-800">Aniversário</th>
                    <th class="border border-slate-800">Endereço</th>
                    <th class="border border-slate-800">Número</th>
                    <th class="border border-slate-800">Bairro</th>
                    <th class="border border-slate-800">Ação</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($clients as $client)
                    <tr>
                        <td class="p-2 border border-slate-800">{{$client->name}}</td>
                        <td class="p-2 border border-slate-800">{{$client->birthday}}</td>
                        <td class="p-2 border border-slate-800">{{$client->street}}</td>
                        <td class="p-2 border border-slate-800">{{$client->number}}</td>
                        <td class="p-2 border border-slate-800">{{$client->neighborhood}}</td>
                        <td class="p-2 border border-slate-800">
                            <a href="{{ route('client.show', $client->id) }}" class="px-4 py-2 border rounded text-black border-black hover:text-indigo-500 hover:bg-indigo-200 mt-4 lg:mt-0 transition duration-500"><ion-icon name="folder-open-outline"></ion-icon></a>
                            <a href="{{ route('client.destroy', $client->id) }}" class="px-4 py-2 border rounded text-black border-black hover:text-red-500 hover:bg-indigo-200 mt-4 lg:mt-0 transition duration-500"><ion-icon name="trash-outline"></ion-icon></a>
                        </td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
@endsection