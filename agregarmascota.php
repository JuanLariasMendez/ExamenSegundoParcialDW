<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="diseño.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <p>
        <h2 style="text-align: center">INGRESO DE DATOS DE LA MASCOTA</h2>
    </p>
    <form {margin: 0 auto;} action="VacunasController.php" method="post">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" class = "form-control" name="nombre">
        </p>
        <p>
            <input type="submit" class = "form-control" value="GUARDAR MASCOTA" name = "btnGuardar">
        </p>
    </form>
</body>
</html>
