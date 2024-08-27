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
                switch($valor)
                {
                    case 10:
                        echo "Nota A";
                        break;
                    case 9:
                        echo "Nota B";
                        break;
                    case 8:
                        echo "Nota C";
                        break;
                    case 7:
                        echo "Nota D";
                        break;
                    default:
                        echo "Nota E";
                }
                $dado = 1;
                $dado = ($dado >= 1) ? "Sim" : "Não";
                if ($dado >= 1)
                    $dado = "Sim";
                else
                    $dado = "Não";
                $i = 1;
                while ($i<=5)
                {
                    echo "$i \n";
                    $i++;
                }
                $i=0;
                do 
                {
                    echo "$i \n";
                    $i++;
                }
                while ($i<=5);
                for ($i = 0; $i<=5; $i++)
                {
                    echo "$i \n";
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