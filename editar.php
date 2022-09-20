<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Vacunascontroller.php" method="POST">
                        <?php
                            include_once "vacunaModel.php";
                            $nuevoEstudiante = new Estudiante();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
    <p>
        <h2 style="text-align: center">AGREGAR VACUNAS</h2>
    </p>
    <form {margin: 0 auto;} action="VacunasController.php" method="post">
        <p>
            <label for="idmascota">Id:</label>
            <input type="text" class = "form-control" name="idmascota" value="<?php echo $resultadoFiltrado['idmascota']?>" readonly="readonly">
        </p>
        <p>
            <label for="nombreMascota">Nombre:</label>
            <input type="text" class = "form-control" name="nombreMascota" value="<?php echo $resultadoFiltrado['nombreMascota']?>">
        </p>                          
        <p>
            <input type="submit" class = "form-control" value="AGREGAR VACUNA" name = "btnEditar">
        </p>
                        <?php
                            }
                        ?>
    </form>
</body>
</html>