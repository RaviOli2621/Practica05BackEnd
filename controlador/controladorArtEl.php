<?php 
//Xavi Rubio Monje
include  "../model/model.php";
    function eliminar($titol)//Funció per eliminar dades a la BD
    {
        try
        {
            include "altres/conexio.php";
            $eliminar = $connexio->prepare("DELETE FROM articles WHERE(titol = :titol)");
            $comprobar = $connexio->prepare("SELECT titol, cos FROM articles WHERE titol = :titulo AND Usuari = :Usuari");
                        
            $eliminar->bindParam(":titol",$titol);
            $comprobar->bindParam(":titulo",$titol);
            $comprobar->bindParam(":Usuari",$_SESSION['Usuari']);
            $result = buscarBD($comprobar);
            if((!empty($result)))
            {
                $result = buscarBD($eliminar);
                return "<tr><td id=\"Res\">Operació exitosa</td></tr>";
            }
            return "<tr><td id=\"ResM\">Titol no existent o no tiene los permisos para borrarlo</td></tr>";
        }catch (PDOException $e){ //
            // mostrarem els errors
            return "<tr><td id=\"ResM\">Error: " . $e->getMessage()."</td></tr>";
        }
        
    }
?>