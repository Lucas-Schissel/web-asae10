<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/t1.css')}}" type="text/css">

</head>
<body>

	
	<div class="container mt-4 text-center">
		<h1>Login</h1>
		<div class="row">
			<div class="col-md-2 mt-2">
				<!-- coluna vazia esquerda -->
			</div>
			<div class="col-md-8 mt-3">		
			
			<form method="post" action="{{ route('logar') }}">
				@csrf
				<input type="text" name="login" placeholder="Login..." required>
				<br><br>
				<input type="password" name="senha" placeholder="Senha..." required>
				<br><br>
				<input type="submit"  value="Logar">
				<br><br>
			</form>

			<a class="btn btn-primary" href="{{ route('usuario_cadastro') }}">Cadastrar-se</a>

			</div>
			<div class="col-md-2 mt-2">
				<!-- coluna vazia direita -->
			</div>
		</div>
		
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>