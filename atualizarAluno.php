
<?php
	include_once('conexao.php');
	$id=trim($_POST['id']);
	$nome=trim($_POST['nome']);
	$telefone=trim($_POST['telefone']);
	$DN=trim($_POST['DN']);
	$Data_cadastro=trim($_POST['horario']);
	$Cod_curso=trim($_POST['Cod_curso']);
	$horario=trim($_POST['horario']);
	echo $nome;
	if (!empty($nome) && !empty($telefone) && !empty($DN) && !empty($Data_cadastro) && !empty($Cod_curso) && !empty($horario)){
			$query = "UPDATE aluno set Nome='$nome',DN='$DN',Telefone='$telefone',Data_cadastro='$Data_cadastro',Cod_curso='$Cod_curso' WHERE Nome='$nome'"; 

			$ins = mysqli_query($conn,$query); 
			if ($ins==FALSE){
				$msg = "Erro na consulta atualização aluno " . mysqli_error($conn) . "<br/>"; 
			}else {
				$msg = "Foi inserido " . mysqli_affected_rows($conn) . " registros <br/>";
				unset ($telefone, $nome); 
			}
			echo $msg;
		} 
	header ("location: index.php"); 

?>
