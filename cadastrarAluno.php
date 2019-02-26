
<?php
	include_once('conexao.php');
	$nome=trim($_POST['nome']);
	$telefone=trim($_POST['telefone']);
	$DN=trim($_POST['DN']);
	$Data_cadastro=trim($_POST['DN']);
	$Cod_curso=trim($_POST['Cod_curso']);
	$horario=trim($_POST['horario']);
	if (!empty($nome) && !empty($telefone) && !empty($DN) && !empty($Data_cadastro) && !empty($Cod_curso) && !empty($horario)){
			$query = "INSERT INTO aluno VALUES (null, '$nome','$DN', '$telefone','$horario','$Cod_curso');"; 

			$ins = mysqli_query($conn,$query); 
			if ($ins==FALSE){
				$msg = "Erro na consulta de inserir aluno " . mysqli_error($conn) . "<br/>"; 
			}else {
				$msg = "Foi inserido " . mysqli_affected_rows($conn) . " registros <br/>";
				unset ($telefone, $nome); 
			}
			echo $msg;
		} 
	header ("location: index.php"); 

?>
