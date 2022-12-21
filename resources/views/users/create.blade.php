@extends('layouts.main')

@section('title', 'Novo Usuario')

@section('content')
    <h1>Novo Usuario</h1>

    @include('includes.validations-form')

    <form action="{{route('users.store')}}" method="post">
        @csrf
        @include('users.partials.form')
    </form>
@endsection