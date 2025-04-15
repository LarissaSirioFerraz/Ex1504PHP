<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cor</title>
</head>
<body>
<fieldset>
    <legend>Sorteio de Cor</legend>
        
        <?php
            $cores = array("vermelho", "azul", "verde", "amarelo", "preta", "branca");
            $sorteio = rand(0, 5);

            switch ($sorteio)
            {
                case 0:
                    echo "O tomate é: " . $cores[$sorteio];
                    break;
                case 1:
                    echo "O mar é: " . $cores[$sorteio];
                    break;
                case 2:
                    echo "A grama é: " . $cores[$sorteio];
                    break;
                case 3:
                    echo "O sol é: " . $cores[$sorteio];
                    break;
                case 4:
                    echo "A Larissa é: " . $cores[$sorteio];
                    break;
                case 5:
                    echo "A nuvem é: " . $cores[$sorteio];
                    break;
            }
        ?>
        <br />
</fieldset>
</body>
</html>