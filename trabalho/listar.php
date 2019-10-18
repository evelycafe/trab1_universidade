<?php
	include ("../classeLayout/classeCabecalho.php");
	include ("cabecalho.php");
	include ("../classeLayout/classeTabela.php");
	
	include ("conexao.php");
	include ("classeControllerBD.php");
	
	$colunas = array("id_professor AS ID", "Nome_Departamento AS 'Nome do Departamento'", "Endereco AS 'Endereço'", "CEP", "Cidade", "Estado", "Nome_Pais AS 'País'", "Nome_Regiao AS 'Região'");
	
	$t[0][0] = "professor";
	$t[0][1] = "localizacao";
	$t[1][0] = "localizacao";
	$t[1][1] = "pais";
	$t[2][1] = "pais";
	$t[2][1] = "regiao";
	
	$c = new ControllerBD($conexao);
	
	$r = $c->selecionar($colunas,$t, null);
	
	while ($linha = $r->fetch(PDO::FETCH_ASSOC)) {
		$matriz[] = $linha;
	}
	
	$t = new Tabela($matriz);
	
	$t->Exibe();
?>