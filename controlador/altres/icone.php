<?php
//Xavi Rubio Monje
if(isset($_SESSION['Usuari']) && !isset($_POST['LogOut']))
{
    if(preg_match("/vistaEdUsuari.php$/",$_SERVER["REQUEST_URI"]))
    {
        echo '<div id="circle">
            <button style="border:0px solid black; background-color: transparent;"><div>
                <h1>'.substr($_SESSION['Usuari'],0,1).'</h1>
            </div></button>
        </div>';
    }else if(preg_match("/index\.php$/",$_SERVER["REQUEST_URI"]) || preg_match("/Practica05BackEnd\/$/",$_SERVER["REQUEST_URI"]))
    {
        
        echo '<form method = "POST" id="EdUser" action= "'.htmlentities("vista/vistaEdUsuari.php").'">';
        echo '<div id="circle">
            <button style="border:0px solid black; background-color: transparent;" onclick="document.getElementById("EdUser").submit()"><div>
                <h1>'.substr($_SESSION['Usuari'],0,1).'</h1>
            </div></button>
        </div>';
        echo '</form>';
    }else
    {
        echo '<form method = "POST" id="EdUser" action= "'.htmlentities("vistaEdUsuari.php").'">';
        echo '<div id="circle">
            <button style="border:0px solid black; background-color: transparent;" onclick="document.getElementById("EdUser").submit()"><div>
                <h1>'.substr($_SESSION['Usuari'],0,1).'</h1>
            </div></button>
        </div>';
        echo '</form>';
    }
}

?>