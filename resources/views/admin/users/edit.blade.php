@extends('admin.layouts.app')
@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar usuário {{ $user->name }}</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action={{ route('users.update', $user->id) }} method="POST">
        @csrf()
        @method('put')
        <input type="text" name="name" placeholder="Insira o nome" value=" {{ $user->name }}">
        <input type="email" name="email" placeholder="Insira o e-mail">
        <input type="password" name="password" placeholder="Insira a senha"><br>
        <button type="submit">Enviar</button>

        {{--    teste!--}}
    </form>
@endsection
