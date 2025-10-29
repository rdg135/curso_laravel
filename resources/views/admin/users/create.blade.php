@extends('admin.layouts.app')

@section('title', 'Criar Usuário')
@section('content')
    <h1>Criar usuário</h1>

    <x-alert/>
    <form action={{ route('users.store') }} method="POST">
        @csrf()
        <input type="text" name="name" placeholder="Insira o nome">
        <input type="email" name="email" placeholder="Insira o e-mail">
        <input type="password" name="password" placeholder="Insira a senha"><br>
        <button type="submit">Enviar</button>

        {{--    teste!--}}
    </form>
@endsection
