<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
<?php
	$n1 = $_POST['n1'];
	
    $ns = rand(0,$n1);

	echo "O número gerado de zero até o seu número inserido foi: ". $ns;
?>
</body>
</html>