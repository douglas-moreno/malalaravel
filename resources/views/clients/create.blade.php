@extends('layouts.main')

@section('title', 'Novo Eleitor')

@section('content')
    <h1>Novo Eleitor</h1>

    @include('includes.validations-form')

    <form action="{{route('client.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{$client->name ?? old('name')}}">
        <input type="text" name="titulo" placeholder="Titulo" value="{{$client->titulo ?? old('titulo')}}">
        <input type="text" name="zona" placeholder="Zona" value="{{$client->zona ?? old('zona')}}">
        <input type="text" name="secao" placeholder="Secao" value="{{$client->secao ?? old('secao')}}">
        <input type="text" name="sexo" placeholder="Sexo" value="{{$client->sexo ?? old('sexo')}}">
        <input type="text" name="type" placeholder="Type" value="{{$client->type ?? old('type')}}">
        <input type="date" name="birthday" placeholder="Aniversario" value="{{$client->birthday ?? old('birthday')}}">
        <input type="checkbox" name="child">Filho</input>
        <input type="hidden" name="negra" value=0>
        <input type="hidden" name="prestador_id" value=1>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection