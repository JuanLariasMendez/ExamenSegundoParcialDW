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
        <h2 style="text-align: center">LISTA DE MASCOTAS</h2>
    </p>
    <hr>
    <table class="table table-striped w-50 p-3" border="2">
        <th>Id_Mascota</th>
        <th>Mascota</th>
        <th colspan="2">ACCIONES</th>
    <?php
        include_once "vacunaModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['idmascota'] ?> </td>
                <td>  <?php echo $Estudiantes['nombreMascota'] ?> </td>
                <td style="text-align: left;">
                <a href="Agregarvacuna.php?idEst=<?php echo $Estudiantes ['idmascota'] ?>"><img alt="agregar" src="agregarDW.png">
                </td>
                <td style="text-align: left;">
                <a href="editar.php?idEst=<?php echo $Estudiantes ['idmascota'] ?>"><img alt="agregar" src="editarDW.png">
                </td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>
