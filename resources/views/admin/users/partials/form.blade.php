<x-alert/>

@csrf()
<input type="text" name="name" placeholder="Insira o nome" value=" {{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="Insira o e-mail" value=" {{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Insira a senha"><br>
<button type="submit">Enviar</button>
