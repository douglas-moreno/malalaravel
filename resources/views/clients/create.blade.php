@extends('layouts.main')

@section('title', 'Novo Eleitor')

@section('content')
    <h1 class="text-center text-2xl p-4">Novo Eleitor</h1>

    @include('includes.validations-form')

    <form action="{{route('client.store')}}" method="post">
        @csrf
        <div class="flex border p-2">
            <div class="flex-auto w-3/4">
                <label class="p-2"> Nome 
                    <input class="p-2 focus:bg-indigo-200" size="80" type="text" name="name" placeholder="Nome" value="{{$client->name ?? old('name')}}">
                </label>
            </div>
            <div class="flex-auto w-1/4">
                <label class="p-2"> Sexo 
                    <input class="p-2 focus:bg-indigo-200" type="text" name="sexo" placeholder="Sexo" value="{{$client->sexo ?? old('sexo')}}">
                </label>
            </div>
        </div>
        <div class="flex border p-2">
            <div class="flex-auto w-1/3">
                <label class="p2"> Título
                    <input class="p-2 focus:bg-indigo-200" type="text" name="titulo" placeholder="Titulo" value="{{$client->titulo ?? old('titulo')}}">
                </label>
            </div>
            <div class="flex-auto w-1/3">
                <label class="p2"> Zona
                    <input class="p-2 focus:bg-indigo-200" type="text" name="zona" placeholder="Zona" value="{{$client->zona ?? old('zona')}}">
                </label>
            </div>
            <div class="flex-auto w-1/3">
                <label class="p2"> Seção
                    <input class="p-2 focus:bg-indigo-300" type="text" name="secao" placeholder="Secao" value="{{$client->secao ?? old('secao')}}">    
                </label>
            </div>
        </div>
        
        
        <input class="p-2 focus:bg-indigo-300" type="text" name="type" placeholder="Type" value="{{$client->type ?? old('type')}}">
        <input class="p-2 focus:bg-indigo-300" type="date" name="birthday" placeholder="Aniversario" value="{{$client->birthday ?? old('birthday')}}">
        <input class="p-2 focus:bg-indigo-300" type="checkbox" name="child">Filho</input>
        <input class="p-2 focus:bg-indigo-300"type="hidden" name="negra" value=0>
        <input class="p-2 focus:bg-indigo-300" type="hidden" name="prestador_id" value=1>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection