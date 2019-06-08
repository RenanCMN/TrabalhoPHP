<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Clientes</title>
</head>
<body>
<h1>Listagem de Clientes</h1>
@if (session('mensagem'))
    <h2>{{ session('mensagem') }}</h2>
@endif
<a href="/clientes/novo">Novo</a>
<table>
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>datanascimento</th>
        <th>cpf</th>
        <th>email</th>
        <th>telefone</th>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente -> id }}</td>
            <td>{{ $cliente -> nome }}</td>
            <td>{{ $cliente -> datanascimento }}</td>
            <td>{{ $cliente -> cpf }}</td>
            <td>{{ $cliente -> email }}</td>
            <td>{{ $cliente -> telefone }}</td>
            <td>
                <a href="/clientes/{{ $cliente -> id }}">Visualizar</a>
                <a href="/clientes/editar/{{ $cliente -> id }}">Editar</a>
                <a href="/clientes/excluir/{{ $cliente -> id }}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>