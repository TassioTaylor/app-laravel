<html>
    <head></head>
    <body>
        <h1>Listar Clientes</h1>
        <a href="/cliente/form-cadastrar">Cadastrar Novo Cliente</a>
        <table>
            <thead>
               <tr>
                   <th>Id</th>
                   <th>Nome</th>
                   <th>E-mail</th>
               </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>
                            <a href="{{"/cliente/{$client->id}/form-editar"}}">Editar</a> |
                            <a href="{{"/cliente/{$client->id}/excluir"}}"
                               onclick="event.preventDefault();if(confirm('Deseja Excluir este registro?')){window.location.href='{{"/cliente/{$client->id}/excluir"}}'}">Excluir</a>
                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </body>
</html>