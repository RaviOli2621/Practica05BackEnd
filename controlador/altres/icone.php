<?php
//Xavi Rubio Monje
if(isset($_SESSION['Usuari']) && !isset($_POST['LogOut']))
{
    echo '<form method = "POST" id="EdUser" action= "'.htmlentities("../index.php").'">';
    echo '<div id="circle">
        <button onclick="document.getElementById("EdUser").submit()"><div>
            <h1>'.substr($_SESSION['Usuari'],0,1).'</h1>
        </div></button>
    </div>';
    echo '</form>';
}
?>