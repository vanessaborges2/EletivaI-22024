<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Este é um comentário de uma linha
        #Estilo Python
        /*
            Este
            é um comentário em bloco
        */
        $valor = (int) $_POST['valor'];
        $valor = (float) $_POST['valor'];
        $valor = (string) $_POST['valor'];
        //$valor = (bool) $_POST['valor'];
        echo 'Valor informado: '.$valor;
    ?>
</body>
</html>