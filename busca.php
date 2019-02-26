<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$aluno = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$aluno = "SELECT * FROM aluno WHERE Nome LIKE '%$aluno%'";
	$resultado_alunos = mysqli_query($conn, $aluno);

	if(mysqli_num_rows($resultado_alunos) >0){
		echo '<table class="table">';

			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">Aluno</th>';
			echo '<th scope="col">Telefone</th>';
			echo '<th scope="col">Curso</th>';
			echo '<th scope="col">Ação</th>';
			echo '</tr>';
			echo '</thead>';
		while($rows = mysqli_fetch_array($resultado_alunos)){
			echo '<tbody>';
			echo '<tr>';
			echo "<td>".$rows['Nome']."</td>";
			echo "<td>".$rows['Telefone']."</td>";
			echo "<td>".$rows['Cod_curso']."</td>";
			echo '<td><a href="formatualizarAluno.php?id='.$rows['Nome'].'">Atualizar</a></td>';
			echo '</tr>';		
		}
		echo '</tbody>';
		echo '</table>';
	}else{
		echo "Nenhum aluno encontrado...";
	}

?>
