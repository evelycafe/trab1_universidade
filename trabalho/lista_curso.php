<?php

	include ("classeLayout/classeCabecalhoHTML.php");
    include ("cabecalho.php");
	
	include("conexao.php");
	
	$sql = "SELECT * FROM curso";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID CURSO</th>
				<th>NOME</th>
				<th>ID AREA</th>		
				<th>AÇÃO</th>
			</tr>
		</thead>
		<tbody>";
		  
	while($linha=$stmt->fetch()) {
		echo "<tr>
				<td>".$linha["ID_CURSO"]."</td>
				<td>".$linha["NOME"]."</td>
				<td>".$linha["COD_AREA"]."</td>		
				
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='curso' />
						<input type='hidden' name='id' value='".$linha["ID_CURSO"]."' />
						<button>Remover</button>
					</form>
				</td>
		    </tr>";
	}
	
	echo "</tbody>
		</table>";
?>