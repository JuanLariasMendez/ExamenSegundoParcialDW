<?php
include "vacunaModel.php";
$nuevoEstudiante = new Estudiante();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['nombre']);
    header('Location: agregarmascota.php');
}
else
if(isset($_POST['btnAgregar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idmascota'],$_POST['vacuna']); 
 header('Location: listarmascota.php');
        
}
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EliminarEstudiante($_POST['idmascota'],$_POST['nombreMascota']); 
 header('Location: listarmascota.php');
        
}

/*EDITAR*/