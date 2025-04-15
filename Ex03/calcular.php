<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Frase da Sorte</title>
</head>
<body>
<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['genero'])) 
	{
	$genero = $_POST['genero'];

	if ($genero == "homem")
	{
		$vetor = array("Você será reconhecido pelo seu talento hoje!", "Grandes oportunidades estão a caminho.", "Hoje é o dia perfeito para iniciar algo novo!");
		$palavra = $vetor[rand(0, count($vetor)-1)];
		echo $palavra;
	}
	else
	{
		$vetor = array("Sua determinação abrirá portas incríveis.", "Um gesto gentil mudará o rumo do seu dia!", "Você está prestes a alcançar algo extraordinário.");
		$palavra = $vetor[rand(0, count($vetor)-1)];
		echo $palavra;
	}
	}
?>
</body>
</html>