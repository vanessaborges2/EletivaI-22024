<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            try
            {
                $valor = (int) $_POST['valor'] ?? 0;
                if ($valor > 0)
                {
                    echo "Valor positivo";
                } 
                elseif ($valor < 0) 
                {
                    echo "Valor Negativo";
                } 
                else 
                {
                    echo "Valor informado é igual a zero!";
                }
            } 
            catch(Exception $e)
            {
                echo "Erro: ".$e->getMessage();
            }
        }
    ?>
</body>
</html>