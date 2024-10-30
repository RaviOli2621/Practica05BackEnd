<!DOCTYPE html>
<!--Xavi Rubio Monje-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estilsLog.css"/>
    <!--<script defer src="Js/mantenerDatos.js"></script>-->
    <title>Cercar</title>
</head>
<body>
	<?php session_start(); include "../controlador/altres/icone.php";?>
    <br><div class="div">
        <table id="gen" class="table_2">
            <form method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
                <tr> <!--Nom-->
                    <td class="td_2">	
                        <label for="Intrnom">Introdueix el nou nom:</label>		
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="usuari" type="text" name="usuari" placeholder='<?php echo($_SESSION["Usuari"]) ?>'/>
                    </td>
                </tr>
                <tr> <!--Contr-->
                    <td class="td_2">	
                        <label for="IntrContr">Introdueix la teva foto de perfil:</label>		
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="foto" type="file" name="foto" placeholder="Solo png i jpg"/>
                    </td>
                <tr>
                    <td>
                        <a href="./vistaCanvCon.php">Canviar contrasenya</a>
                    </td>
                </tr>
                </tr>
                    <td><!--Enviar-->
                        <input id="inputSub" class="inputSub" type="submit" name="inserir" value="Enviar" />
                    </td>
                </tr>
            </form>
            <tr>
                <td><!--Anar endarrere-->
                    <form action="<?php echo htmlentities("../index.php"); ?>" method = "POST">
                        <input id="inputSub" class="inputSub" type="submit" name="endarrere" value="Inici">
                    </form>
                </td>
            </tr>
            
        </table>
    </div>
    
</body>
</html>