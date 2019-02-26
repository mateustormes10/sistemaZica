<?php
		include('conexao.php');
		$sql = 'select * from curso';
		$results = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Zica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	<a class="nav-link" href="#">Cadastrar Aluno </a>
		      </li>
		    </ul>
		</div>
</nav>
<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
?>
	<div class="container-fluid">
		<form name="loginform" method="post" action="cadastrarAluno.php">
		  <div class="form-group row">
			        <label class="col-sm-2 col-form-label">Aluno:</label>
			        <div class="col-sm-10">
			      		<input class="form-control" name="nome" type="text" id="nome" value=""/>
			      	</div>
		  </div>
		  <div class="form-group row">
			    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Curso:</label>
			    <div class="col-sm-10">
				    <select name="Cod_curso" class="form-control" id="exampleFormControlSelect1">
				    <?php while($linha=mysqli_fetch_array($results)){ ?>
				      <option value='<?php echo $linha["Cod_curso"];?>'><?php echo $linha["Nome"];?></option>
				      <?php
				      }?>
				    </select>
				</div>
		  </div>
		  <div class="form-group row">
			    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Data Nasc:</label>
			    <div class="col-sm-10">
				 <input class="form-control" name="DN" type="date">
				</div>
		  </div>
		  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Telefone:</label>
			    <div class="col-sm-10">
			      	<input class="form-control" name="telefone" type="text" id="telefone" value=""/>
			    </div>
		  </div>
		  <div class="form-group row" style="display: none;">
			    <label class="col-sm-2 col-form-label">Horário:</label>
			    <div class="col-sm-10">
			      	<input readonly class="form-control" name="horario" type="text" id="horario" value="<?php echo $date;?>"/>
			    </div>
		  </div>
		  <div class="form-group row">
		  	<button style="margin-left: 45%;" type="submit" class="btn btn-primary">Cadastrar</button>
		  </div>
		</form>
	</div>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</body>
</html>