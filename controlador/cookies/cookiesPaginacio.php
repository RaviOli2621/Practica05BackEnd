<?php
//Xavi Rubio Monje
setcookie("pagina",$_POST['NumPag'],time()+60*40);
setcookie("articles",$_POST['artPag'],time()+60*40);
setcookie("ordre",$_POST['ordre'] ?? "",time()+60*40);
?>