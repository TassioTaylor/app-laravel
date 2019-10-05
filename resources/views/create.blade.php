<html>
<head></head>
<body>
 <h1>Criar novo Cliente</h1>
 <form method="POST" action="/cliente/cadastrar" >
     {!! csrf_field() !!}
     <label for="name">Nome</label>
     <input type="text" name="name" id="name">

     <label for="email">E-mail</label>
     <input type="text" name="email" id="email">
     <button type="submit">Enviar</button>
 </form>
</body>
</html>