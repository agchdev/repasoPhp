<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="nombre">
        <input type="date" name="fecha">
        <input type="text" name="contraseña">
        <input type="submit" name="action" value="validarUsu">
    </form>
    <?php
        $caca = new DateTime();
        echo $caca->format('Y-m-d H:m:s');

        $caca->modify('+1 year');
        echo "<br>".$caca->format('Y-m-d H:m:s');
        
        $caca->modify('+1 year');
        echo "<br>".$caca->format('Y-m-d H:m:s');
    ?>
</body>
</html>