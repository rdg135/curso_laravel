@extends('admin.layouts.app')

@section('title', 'Lista de Usuários')
@section('content')
<h1>Usuários</h1>
<a href={{ route('users.create') }}>Novo usuário</a>
<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>-</td>
        </tr>
    @empty
        <tr>
            <td colspan="50">Nenhum usuário encontrado.</td>
        </tr>
    @endforelse
    </tbody>
</table>

{{ $users->links() }}
@endsection
