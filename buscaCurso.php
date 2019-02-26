<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$curso = $_POST['palavraCurso'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$cursos = "SELECT * FROM curso WHERE Nome LIKE '%$curso%'";
	$resultado_cursos = mysqli_query($conn, $cursos);

	if(mysqli_num_rows($resultado_cursos) >0){
		echo '<table class="table">';

			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">Cod Curso</th>';
			echo '<th scope="col">Nome</th>';
			echo '</tr>';
			echo '</thead>';
		while($rows = mysqli_fetch_array($resultado_cursos)){
			echo '<tbody>';
			echo '<tr>';
			echo "<td>".$rows['Cod_curso']."</td>";
			echo "<td>".$rows['Nome']."</td>";
			echo '<td><a href="formatualizarCurso.php">Atualizar</a></td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}else{
		echo "Nenhum curso encontrado...";
	}

?>
