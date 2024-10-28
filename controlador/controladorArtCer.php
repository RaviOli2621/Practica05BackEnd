<?php 
//Xavi Rubio Monje
include  "../model/model.php";
    function buscar($titol,$cos)//Funció per cercar dades a la BD
    { 
        $cos = "%".$cos."%";
        $titol = "%".$titol."%";
        try
        {
            include "altres/conexio.php";
            if($titol != "")
            {
                if($cos != "")
                {
                    $comprobar = $connexio->prepare("SELECT titol, cos FROM articles WHERE titol LIKE :titulo AND cos LIKE :cuerpo");
                    $comprobar->bindParam(":titulo",$titol);
                    $comprobar->bindParam(":cuerpo",$cos);
                }else
                {
                    $comprobar = $connexio->prepare("SELECT titol, cos FROM articles WHERE titol LIKE :titulo");
                    $comprobar->bindParam(":titulo",$titol);
                } 
            }else if($cos != "")
            {
                $comprobar = $connexio->prepare("SELECT titol, cos FROM articles WHERE cos LIKE :cuerpo");
                $comprobar->bindParam(":cuerpo",$cos);
            }else
            {
                $comprobar = $connexio->prepare("SELECT titol, cos FROM articles");
            }
            

            $result = buscarBD($comprobar);
            return $result;
        }catch (PDOException $e){ 
            // mostrarem els errors
            return "<tr><td id=\"ResM\">Error: " . $e->getMessage()."</td></tr>";
        } 
    }
?>