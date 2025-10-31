@extends('admin.layouts.app')

@section('title', 'Criar Usuário')
@section('content')
    <h1>Criar usuário</h1>
    <form action={{ route('users.store') }} method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection
