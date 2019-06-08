<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalhe de clientes</title>
</head>
<body>
@foreach ($clientes as $cliente)
    <h1>{{ $cliente -> nome }}</h1>
    <p>Data Nascimento: {{  $cliente -> datanascimento }}</p>
    <p>Email: {{  $cliente -> email }}</p>
    <p>Cpf: {{ $cliente -> cpf }}</p>
    <p>Telfone : {{ $cliente -> telefone }}</p>
    <p><a href="/clientes">Voltar</a></p>
    @endforeach
</body>
</html>