<?php
	include ("classeLayout/classeCabecalhoHTML.php");
	include ("cabecalho.php");
	
	include("conexao.php");
	
	$sql = "SELECT * FROM aluno";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID ALUNO</th>
				<th>NOME</th>	
				<th>PRONTUARIO</th>	
                <th>ID_CURSO</th>
				<th>AÇÃO</th>
			</tr>
		</thead>
		<tbody>";
		
	while($linha=$stmt->fetch()) {
		echo "<tr>
				<td>".$linha["ID_ALUNO"]."</td>
				<td>".$linha["NOME"]."</td>
				<td>".$linha["PRONTUARIO"]."</td>
                <td>".$linha["COD_CURSO"]."</td>	
				
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='aluno' />
						<input type='hidden' name='id' value='".$linha["ID_ALUNO"]."' />
						<button>Remover</button>
					</form>
				</td>
		    </tr>";
	}
	echo "</tbody>
		</table>";
?>