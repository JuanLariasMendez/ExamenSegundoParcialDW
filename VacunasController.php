<?php
include "vacunasModel.php";
$nuevoEstudiante = new Estudiante();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['nombre']);
    header('Location: agregarmascota.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['txtdireccion'],$_POST['txttelefono']); 
 header('Location: VistaEstudiante.php');
        
}
if(isset($_POST['btnEliminar']))
{
 $nuevoEstudiante->EliminarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['txtdireccion'],$_POST['txttelefono']); 
 header('Location: VistaEstudiante.php');
        
}

/*EDITAR*/