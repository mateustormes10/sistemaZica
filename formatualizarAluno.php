<?php
$pegaid = $_GET['id'];

include('conexao.php');
$sql = "SELECT * FROM aluno WHERE Nome LIKE '$pegaid'";
$results = mysqli_query($conn, $sql);
while($linha=mysqli_fetch_array($results)){
	$id = $linha["Cod_aluno"];
	$datanasc = $linha["DN"];
	$curso = $linha["Cod_curso"];
	$telefone = $linha["Telefone"];
	$telefone = $linha["Telefone"];
	$datacad = $linha["Data_cadastro"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Zica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="default.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	<a class="nav-link" href="#">Atualizar Aluno <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		</div>
</nav>

<div class="container-fluid">
		<form name="loginform" method="post" action="atualizarAluno.php">
			<div class="form-group row" style="display: none;">
			        <label class="col-sm-2 col-form-label">ID:</label>
			        <div class="col-sm-10">
			      		<input readonly class="form-control" name="id" type="text" id="id" value="<?php echo $id?>"/>
			      	</div>
		  </div>

		  <div class="form-group row">
			        <label class="col-sm-2 col-form-label">Aluno:</label>
			        <div class="col-sm-10">
			      		<input class="form-control" name="nome" type="text" id="nome" value="<?php echo $pegaid?>"/>
			      	</div>
		  </div>
		  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Curso:</label>
			    <div class="col-sm-10">
				    <input class="form-control" name="Cod_curso" type="text" id="Cod_curso" value="<?php echo $curso;?>"/>
				</div>
		  </div>
		  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Data Nasc:</label>
			    <div class="col-sm-10">
				    <input class="form-control" name="DN" type="date" id="DN" value="<?php echo $datanasc;?>"/>
				</div>
		  </div>
		  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Telefone:</label>
			    <div class="col-sm-10">
			      	<input class="form-control" name="telefone" type="text" id="telefone" value="<?php echo $telefone;?>"/>
			    </div>
		  </div>
		  <div class="form-group row" style="display: none;">
			    <label class="col-sm-2 col-form-label">Horário:</label>
			    <div class="col-sm-10">
			      	<input readonly class="form-control" name="horario" type="text" id="horario" value="<?php echo $datacad;?>"/>
			    </div>
		  </div>

		  <div class="form-group row">
		  	<button style="margin-left: 45%;" type="submit" class="btn btn-primary">Atualizar</button>
		  </div>
		</form>
	</div>
</body>
</html>