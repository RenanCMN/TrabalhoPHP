<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Editar Clientes</h1>
	@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	@foreach ($clientes as $cliente)
	<form action="/clientes/gravar/{{ $cliente ->id }}" method="post">
	  @csrf
    <p>Nome: <input type="text" name="nome" value="{{ $cliente -> nome }}"></p>
		<p>datanascimento: <input type="text" name="datanascimento" value="{{ $cliente -> datanascimento }}"></p>
		<p>cpf: <input type="text" name="cpf" value="{{$cliente -> cpf }}"></p>
		<p>email: <input type="text" name="email" value="{{ $cliente -> email }}"></p>
		<p>Telefone: <input type="text" name="telefone" value="{{ $cliente -> telefone }}"></p>
		
		<p><input type="submit" value="Salvar"></p>

		@endforeach
	</form>
</body>
</html>