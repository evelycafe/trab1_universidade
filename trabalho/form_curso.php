<?php
	require_once ("classeForm/InterfaceExibicao.php");
	require_once ("classeForm/classeInput.php");
    require_once ("classeForm/classeForm.php");
    require_once ("classeForm/classeSelect.php");
    require_once ("classeForm/classeOption.php");
	require_once ("classeForm/classeButton.php");
    
    include("conexao.php");

    $select = "SELECT ID_AREA AS value, NOME AS texto FROM curso ORDER BY NOME";

    $stmt = $conexao->prepare($select);
    $stmt->execute();

    while($linha=$stmt->fetch()) {
        $matriz[]=$linha;
    }

	$v = array("action"=>"insere.php?tabela=Curso","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_CURSO","placeholder"=>"ID DO CURSO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME...");
    $f->add_input($v);

    $v = array("name"=>"ID_AREA");
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
<h3>Formulário - Inserir Curso</h3>

<hr/>
<?php
	$f->exibe();

?>

<a href='index.php'>Home</a>
<a href='lista_curso.php'>Voltar Para a listagem</a>
</body>
</html>
</html>