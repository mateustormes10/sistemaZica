<!DOCTYPE html>
<html>
<head>
	<title>Sistema Zica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="author" content="Mateus Tormes">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- importando java script pra busca-->
    <script type="text/javascript" src="javascriptpersonalizado.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<div class="container-fluid">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="formcadastrarAluno.php">Cadastrar Aluno <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="formcadastrarCurso.php">Cadastrar Curso <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		</div>
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Listar Alunos <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		</div>
	</nav>


<form method="POST" id="form-pesquisa" action="">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Nome: <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		      	<input class="form-control" type="text" name="pesquisa" id="pesquisa" placeholder="">
		      </li>

		      <li class="nav-item active">
		      	<a class="nav-link" href="#">Curso: <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		      	<input class="form-control" type="text" name="pesquisaCurso" id="pesquisaCurso" placeholder="">
		      </li>
		      <li class="nav-item active">
		      	<button type="submit" class="btn btn-primary">Buscar</button>
		      </li>
		    </ul>
		</div>
	</nav>
<ul class="resultado">
		
</ul>
</body>
</html>