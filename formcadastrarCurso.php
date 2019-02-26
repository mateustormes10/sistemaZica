<?php
if (isset($_GET['id'])){
$pegaid = $_GET['id'];
	if ($_GET['id']=='vazio'){
		echo "<script>alert('Está vazio!');</script>";
	}else if($_GET['id']=='sucesso'){
		echo "<script>alert('Cadastro Sucesso!');</script>";
	}else if($_GET['id']=='menor4'){
		echo "<script>alert('Menor que 4!');</script>";
	}else if($_GET['id']=='caracter>50'){
		echo "<script>alert('Caracter > 50');</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Zica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="default.css">
	<meta name="author" content="Mateus Tormes">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	<a class="nav-link" href="#">Cadastrar Curso</a>
		      </li>
		    </ul>
		</div>
</nav>

	<div class="container-fluid">
		<form name="loginform" method="post" action="cadastrarCurso.php">
		  <div class="form-group row">
			        <label class="col-sm-2 col-form-label">Curso:</label>
			        <div class="col-sm-10">
			      		<input class="form-control" name="curso" type="text" id="curso" value=""/>
			      	</div>
		  </div>
		  <button style="margin-left: 40%;" class="btn btn-primary">Cadastrar</button>
		</form>
		 
		</ul>
	</div>

</body>
</html>