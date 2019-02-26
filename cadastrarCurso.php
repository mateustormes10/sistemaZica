<?php
	include_once('conexao.php');
	$curso=trim($_POST['curso']);
	echo strlen($curso);
	if(strlen($curso) <=50){
	if (!empty($curso)){
		if(strlen($curso) >=4){
			$query = "INSERT INTO curso VALUES (null, '$curso');"; 

			$ins = mysqli_query($conn,$query); 
			if ($ins==FALSE){
				$msg = "Erro na consulta de inserir curso " . mysqli_error($conn) . "<br/>"; 
			}else {
				$msg = "Foi inserido " . mysqli_affected_rows($conn) . " registros <br/>";
				unset ($curso); 
			}
			header ("location: formcadastrarCurso.php?id=sucesso");
		}else{
			header ("location: formcadastrarCurso.php?id=menor4");
		}
	}else{
		header ("location: formcadastrarCurso.php?id=vazio");
	}}else{
		header ("location: formcadastrarCurso.php?id=caracter>50");
	}

?>
