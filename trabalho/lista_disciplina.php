<?php
	include ("classeLayout/classeCabecalhoHTML.php");
	include ("cabecalho.php");
	
	include("conexao.php");
	
	$sql = "SELECT * FROM disciplina";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID DISCIPLINA</th>
				<th>NOME</th>
				<th>DESCRIÇÃO</th>	
				<th>ANO</th>	
				<th>ID CURSO</th>		
				<th>ID PROFESSOR</th>
                <th>AÇÃO</th>		
			</tr>
		</thead>
		<tbody>";
		
	while ($linha=$stmt->fetch()) {
		echo "<tr>
				<td>".$linha["ID_DISCIPLINA"]."</td>
				<td>".$linha["NOME"]."</td>
				<td>".$linha["DESCRICAO"]."</td>
				<td>".$linha["ANO"]."</td>
				<td>".$linha["COD_CURSO"]."</td>
				<td>".$linha["COD_PROFESSOR"]."</td>		
				
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='disciplina' />
						<input type='hidden' name='id' value='".$linha["ID_DISCIPLINA"]."' />
						<button>Remover</button>
					</form>
				</td>
		    </tr>";
	}
	echo "</tbody>
		</table>";
?>