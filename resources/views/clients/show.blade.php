@extends('layouts.main')

@section('title', 'Detalhe do Eleitor')

@section('content')
    <div class="">
        <h1>Detalhe do Usuario {{ $client->name }}</h1>

        <ul>
            <li> {{ $client->name}} </li>
            <li> {{ $client->birthday}} </li>
            <li> {{ $client->type}} </li>
        </ul>

        <form action="{{route('client.destroy', $client->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Apagar</button>
        </form>
    </div>
@endsection