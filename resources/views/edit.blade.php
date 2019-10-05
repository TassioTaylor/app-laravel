<html>
<head></head>
<body>
<h1>Editar Cliente {{$cliente->name}}</h1>
<form method="POST" action="{{ "/cliente/{$cliente->id}/editar" }}">
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{$cliente->name}}">

    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" value="{{$cliente->email}}">
    <button type="submit">Editar</button>
</form>
</body>
</html>