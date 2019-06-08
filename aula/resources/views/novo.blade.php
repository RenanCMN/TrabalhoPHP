<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Clientes</title>
</head>
<body>
	<h1>Novo Cliente</h1>
	@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	<form action="/clientes/salvar" method="post">
		@csrf
		<p>Nome: <input type="text" name="nome" value="{{ old('nome') }}"></p>
		<p>datanascimento: <input type="text" name="datanascimento" value="{{ old('datanascimento') }}"></p>
		<p>cpf: <input type="text" name="cpf" value="{{ old('cpf') }}"></p>
		<p>Email: <input type="text" name="email" value="{{ old('email') }}"></p>
		<p>telefone: <input type="text" name="telefone" value="{{ old('telefone') }}"></p>
		<p><input type="submit" value="Salvar"></p>
	</form>
</body>
</html>
