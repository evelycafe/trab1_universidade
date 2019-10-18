<?php
	
	include ("classeLayout/classeCabecalhoHTML.php");
	require_once ("classeForm/InterfaceExibicao.php");
	require_once ("classeForm/classeInput.php");
	require_once ("classeForm/classeForm.php");
	require_once ("classeForm/classeButton.php");

	$v = array("action"=>"insere.php?tabela=Professor","method"=>"post");
	
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_PROFESSOR","placeholder"=>"ID DO PROFESSOR...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"SOBRENOME","placeholder"=>"SOBRENOME DO PROFESSOR..");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME DO PROFESSOR...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"PRONTUARIO","placeholder"=>"PRONTUÁRIO..");
	$f->add_input($v);
	
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
	<body>
		<h3>Formulário - Inserir Dados do Professor</h3>

		<hr />
		<?php
			$f->exibe();
		?>
		
		<a href='index.php'>Home</a>
		
		<a href='lista_professor.php'>Voltar Para a listagem</a>
	</body>
</html>
</html>