<!doctype html>
<html lang='es'>
    <head>
<!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
<title>usuario</title>
    </head>
    <body>
        
    <?php


    if ( isset($_REQUEST['crear']))
        {
            require_once("funciones.php");
            $conexion = Conexion();

            mysqli_query($conexion,"insert into usuario(usuario,clave) values
            ('$_REQUEST[usuario]','$_REQUEST[clave]')") or die ("Problemas en el select ".mysqli_error());
            echo "Usuario Creado";
            echo "<br>";
            echo "El usuario ingresado es: ". $_REQUEST['usuario'];
            echo "<br>";
            echo "La clave ingresada es: ".$_REQUEST['clave'];
            
            mysqli_close($conexion);
        }

    elseif (isset($_REQUEST['modificar']))
    {
        require("funciones.php");
        ModificarUsuario();
    }

    elseif (isset($_REQUEST['ver']))
    {
        require("funciones.php");
        Ver();
    }

    elseif (isset($_REQUEST['eliminar']))
    {
        require("funciones.php");
        Eliminar();
    }



?>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<!-- Optional JavaScript -->
    <script src=
></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
</html>