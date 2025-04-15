<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Frase da Sorte</title>
</head>
<body>
<?php

	$time = $_POST['time'];

	if ($time == "palmeiras") 
    {
        echo "<h1>Avante, Verdão! Rumo à vitória!</h1>";
    } 
    else if ($time == "corinthias") 
    {
        echo "<h1>Vai, Timão! Mostre a sua força!</h1>";
    } 
    else if ($time == "santos") 
    {
        echo "<h1>Pra cima, Peixe! O mar é seu!</h1>";
    } 
    else if ($time == "paulo") 
    {
        echo "<h1>Vamos, Tricolor! Com garra e paixão!</h1>";
    } 

?>
</body>
</html>