<?php
	include ("classeLayout/classeCabecalhoHTML.php");
	require_once ("classeForm/InterfaceExibicao.php");
	require_once ("classeForm/classeInput.php");
	require_once ("classeForm/classeOption.php");
	require_once ("classeForm/classeSelect.php");
	require_once ("classeForm/classeForm.php");
	require_once ("classeForm/classeButton.php");
	
	include("conexao.php");

	$v = array("action"=>"insere.php?tabela=Turmas","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_TURMA","placeholder"=>"ID DA TURMA...");
    $f->add_input($v);
    $v = array("type"=>"number","name"=>"NUM_TURMA","placeholder"=>"ID DA TURMA...");
	$f->add_input($v);
	
	$select = "SELECT ID_ALUNO AS value, NOME AS texto FROM aluno ORDER BY NOME";
	
	$stmt = $conexao->prepare($select);
	
	$stmt->execute();
	
	$v= array("name"=>"ID_ALUNO");
	$f->add_select($v,$matriz);
	
	$matriz = null;
	
	$select = "SELECT ID_DISCIPLINA AS value, NOME AS texto FROM disciplina ORDER BY NOME";
	
	$stmt = $conexao->prepare($select);
	
	$stmt->execute();
	
	$v= array("name"=>"ID_DISCIPLINA");
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
<h3>Formulário - Inserir Turma</h3>

<hr />
<?php
	$f->exibe();

?>
<a href='index.php'>Home</a>
<a href='lista_turmas.php'>Voltar Para a listagem</a>
</body>
</html>
</html>