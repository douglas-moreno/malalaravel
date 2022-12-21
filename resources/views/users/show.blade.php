@extends('layouts.main')

@section('title', 'Detalhe do Usuario')

@section('content')
    <div class="container-fluid text-center">
        <h1>Detalhe do Usuario {{ $user->name }}</h1>

        <ul>
            <li> {{ $user->name}} </li>
            <li> {{ $user->email}} </li>
            <li> {{ $user->created_at}} </li>
        </ul>

        <form action="{{route('users.destroy', $user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Apagar</button>
        </form>
    </div>
@endsection