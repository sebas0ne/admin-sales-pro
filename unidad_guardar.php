<?php
//session_start();
//if($_SESSION["permiso"] != 1 || !isset($_SESSION["permiso"])){
//    header("Location: index.php");
//}
//if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 7200)) {
//    // last request was more than 2 hours ago
//    session_unset();     // unset $_SESSION variable for the run-time 
//    header("Location: logout.php");
//}
//$_SESSION['LAST_ACTIVITY'] = time();
include_once 'conexion.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sistema de Ventas y Almacén - Overware - Marcas</title>
        <link rel="stylesheet" href="css/style.default.css" type="text/css" />
        <link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
        <!--<link rel="stylesheet" href="jqueryui1121/jquery-ui.min.css" type="text/css" />-->
        <script type="text/javascript" src="prettify/prettify.js"></script>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.flot.min.js"></script>
        <script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </head>
    <body>
        <div class="maincontent">
            <div class="contentinner widgetcontent">
                <?php
                //recibo variables - guardar familia
                $descripcion = $_POST["descripcion"];
                $abreviacion = $_POST["abreviacion"];
                $observacion = $_POST["observacion"];
                $query = "insert into unidades(descripcion,observacion,abreviacion) values ('$descripcion','$observacion','$abreviacion');";
                if($res = mysqli_query($db_cn, $query)){
                    echo 'La unidad ha sido guardada correctamente. Cierre esta ventana.';
                }else{
                    echo 'Hubo un error en la base de datos.';
                }
                ?>
            </div>
            
        </div><!--maincontent-->
        
    </body>
    
</html>
