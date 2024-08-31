<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="respexer1.php" method="post">
        <?php
            for ($i=1; $i<=7; $i++)
            { ?>
              <input type='number' name='valor<?= $i?>'>
        <?php    }  ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>