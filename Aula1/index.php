<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hoje é dia <?php echo date("d/m/Y"); ?></h1>
    <form action="Aula1/resposta.php" method="POST">
        <input type="text" name="valor" />
        <button type="submit">Enviar</button>
    </form>

</body>
</html>