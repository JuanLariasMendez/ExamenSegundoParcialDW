<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bfpulpyezwk5c0hsiev1-mysql.services.clever-cloud.com","uoyntim1i4qxclbl","RPqjIZTbJ3NXlG7uMu6A","bfpulpyezwk5c0hsiev1");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }