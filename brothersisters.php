<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAF</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/new.css?v=1.1"/>
</head>

<body>
    <?php include_once('./logic.php');
    error_reporting(E_ERROR | E_PARSE);
    ?>
    <h1>naf</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="big">
            <div class="cuadro1">
                <input type="text" name="familias" placeholder="Familia..." value="<?php echo $familias[$randomFamilia] ?>" readonly>
                <input type="text" name="hermanos" placeholder="Hermano..." value="<?php echo $hermanos[$randomHermano] ?>" readonly>
            </div>
            <div class="cuadro2">
                <input type="submit" name="quienesSeran" value="Que familia será?">
                <input type="submit" name="quienSera" value="Que hermano será?">
            </div>
        </div>
    </form>
</body>

</html>