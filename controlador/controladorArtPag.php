<?php 
//Xavi Rubio Monje
include  "../model/model.php";
    function articles($pagina,$artPag, $ordre)//Prepara els statements requerits per mostrar els articles en l'inici
    {
        if($ordre == "A-Z") $ordre = "ASC";
        elseif($ordre == "Z-A") $ordre = "DESC";
        else $ordre = "";
        $pagina = ((int)($pagina)-1);
        $artPag = (int)($artPag);
        
        
        $inici = (string)($artPag);
        $final = (string)($pagina*$artPag);
        include "altres/conexio.php";
        if($ordre == "") $comprobar = $connexio->prepare("SELECT titol, cos FROM articles LIMIT :inici OFFSET :final");
        else $comprobar = $connexio->prepare("SELECT titol, cos FROM articles ORDER BY titol $ordre LIMIT :inici OFFSET :final");
        $comprobar->bindParam(":inici",$inici,PDO::PARAM_INT);
        $comprobar->bindParam(":final",$final,PDO::PARAM_INT);
        $result = buscarBD($comprobar);
        return $result;
    }
    function cantidad()//Prepara els statements requerits per saver el número de pàgines que es requeriran
    {
        include "altres/conexio.php";
        $comprobar = $connexio->prepare("SELECT COUNT(*) FROM articles");
        $result = buscarBD($comprobar);
        return $result;
    }
?>