
@extends('admin.layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>
    <ul>
        <li style="font-weight: bold">Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>
    <x-alert/>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
@endsection
