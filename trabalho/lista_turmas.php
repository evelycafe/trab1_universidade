<?php
	include ("classeLayout/classeCabecalhoHTML.php");
    include ("cabecalho.php");
	
	include("conexao.php");
	
	$sql = "SELECT * FROM turmas";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID TURMA</th>
				<th>NUM TURMA</th>
				<th>ID ALUNO</th>
				<th>ID DISCIPLINA</th>		
				<th>AÇÃO</th>
			</tr>
		</thead>
		<tbody>";
		  
	while ($linha=$stmt->fetch()) {
		echo "<tr>
				<td>".$linha["ID_TURMA"]."</td>
				<td>".$linha["NUM_TURMA"]."</td>
				<td>".$linha["COD_ALUNO"]."</td>
				<td>".$linha["COD_DISCIPLINA"]."</td>
				
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='turmas' />
						<input type='hidden' name='id' value='".$linha["ID_TURMA"]."' />
						<button>Remover</button>
					</form>
				</td>
		    </tr>";
	}
	echo "</tbody>
		</table>";
?>