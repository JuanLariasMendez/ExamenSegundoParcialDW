<?php
include_once "conexion.php";


class Estudiante
{
    private $apellidos;
    private $nombre;
    private $direccion;
    private $telefono;

    /*public function __construct($ape,$nom,$dir,$tel)
    {
        $this->apellidos = $ape;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }*/

    public function GuardarEstudiante($nom)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into mascota (nombreMascota) values ("."'".$_POST['nombre']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: agregarmascota.php");
    }
    public function ListarEstudiantes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascota");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Estudiantes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarEstudiante($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascota where idmascota=$id");
      return $resultado;
    }

    public function EditarEstudiante($id,$vac)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $idVacuna = $nuevoComando -> real_escape_string($_POST["idmascota"]);
      $nomVacuna = $nuevoComando -> real_escape_string($_POST["vacuna"]);

      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("insert into vacuna (nombreVacuna, idmascota ) 
      values ('$nomVacuna','$idVacuna')");
    }

    public function EliminarEstudiante($id,$nom)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $idVacuna = $nuevoComando -> real_escape_string($_POST["idmascota"]);
      $nomVacuna = $nuevoComando -> real_escape_string($_POST["nombreMascota"]);

      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("update mascota set nombreMascota = '$nomVacuna' where idmascota = $idVacuna"); 
    }
}
