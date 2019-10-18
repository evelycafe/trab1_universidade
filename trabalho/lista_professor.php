<?php
	include ("classeLayout/classeCabecalhoHTML.php");
	include ("cabecalho.php");

	include("conexao.php");
	
	$sql = "SELECT * FROM professor";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID PROFESSOR</th>
				<th>SOBRENOME</th>
				<th>NOME</th>
				<th>PRONTUÁRIO</th>
				<th>AÇÃO</th>
			</tr>
		</thead>
		<tbody>";
		
	while ($linha=$stmt->fetch()) {
		echo "<tr>
				<td>".$linha["ID_PROFESSOR"]."</td>
				<td>".$linha["SOBRENOME"]."</td>
				<td>".$linha["NOME"]."</td>
				<td>".$linha["PRONTUARIO"]."</td>
				
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='professor' />
						<input type='hidden' name='id' value='".$linha["ID_PROFESSOR"]."' />
						<button>Remover</button>
					</form>
				</td>
		    </tr>";
	}
	echo "</tbody>
		</table>
		<a href='index.php'>Home</a></br>
		
		<a href='form_professor.php'>Voltar Para a Pagina Inicial</a>";
?>