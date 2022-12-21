@extends('layouts.main')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar o Usuario {{$user->name}}</h1>

    @include('includes.validations-form')

    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('PUT')
        @csrf
        @include('users.partials.form')
    </form>
@endsection