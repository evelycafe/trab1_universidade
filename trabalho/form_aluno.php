<?php
	include ("classeLayout/classeCabecalhoHTML.php");
	require_once ("classeForm/InterfaceExibicao.php");
	require_once ("classeForm/classeInput.php");
	require_once ("classeForm/classeOption.php");
	require_once ("classeForm/classeSelect.php");
	require_once ("classeForm/classeForm.php");
	require_once ("classeForm/classeButton.php");
	
	include("conexao.php");

	$select = "SELECT ID_CURSO AS value, NOME AS texto FROM curso ORDER BY NOME";
	
	$stmt = $conexao->prepare($select);
	
	$stmt->execute();
	
	while($linha=$stmt->fetch()) {
		$matriz[] = $linha;
	}
	
	$v = array("action"=>"insere.php?tabela=Aluno","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_ALUNO","placeholder"=>"ID DO ALUNO...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"PRONTUARIO","placeholder"=>"PRONTUARIO...");
	$f->add_input($v);
	
	$v= array("name"=>"ID_CURSO");
	$f->add_select($v,$matriz);

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
<h3>Formulário - Inserir Aluno</h3>

<hr />
<?php
	$f->exibe();

?>
<a href='index.php'>Home</a>
<a href='lista_aluno.php'>Voltar Para a listagem</a>
</body>
</html>
</html>