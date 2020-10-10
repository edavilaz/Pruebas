<?php
Function Conexion(){
    $conexion = mysqli_connect("localhost","root","") or die ("problemas en la conexión");
    mysqli_select_db($conexion,"prueba") or die ("Problema en la selección de la Base de Datos");
    return $conexion;
}

Function ModificarUsuario(){
    require_once("funciones.php");
    $conexion = Conexion();
    $registros = mysqli_query($conexion,"select * from usuario where usuario ='$_REQUEST[usuario]'") or die ("Problemas en el select ".mysqli_error());

        if ($reg=mysqli_fetch_array($registros))
                 {
                  ?>
                    <form action="modificarusuario.php" class="form-group" method="post">
                    
                    <input type="hidden" name="usuario" value="<?php echo $_REQUEST['usuario']?> ">
                    
                    Ingrese nuevo Usuario:
                    <input type="text" name="usuarionuevo" class="input-group-text" value="<?php echo $reg['usuario'] ?>">
                    <br>
                    <input type="hidden" name="usuarioviejo" value="<?php echo $reg['usuario'] ?>">
                    
                    Ingrese nueva Clave:
                    <input type="text" name="clavenueva" class="input-group-text" value="<?php echo $reg['clave'] ?>">
                    <br>
                    <input type="hidden" name="clavevieja" value="<?php echo $reg['clave'] ?>">
                    
                    <input type="submit" class="btn btn-danger" value="Modificar">
                    </form>
            <?php
    }
    else
    echo "No existe ese usuario";

}

Function Ver(){
    require_once("funciones.php");
    $conexion = Conexion();
    $registros = mysqli_query($conexion,"select * from usuario where usuario ='$_REQUEST[usuario]'") or die ("Problemas en el select ".mysqli_error());

    if ($reg=mysqli_fetch_array($registros))
             {
              ?>
                <form action="usuario.html" class="form-group" method="post">
                
                Esta es su Clave:
                <input type="text" name="clave" class="input-group-text" value="<?php echo $reg['clave'] ?>">
                <br>
                               
                <input type="submit" class="btn btn-danger" value="Volver">
                </form>
        <?php
}
else
echo "No existe ese usuario";

}

Function Eliminar(){
    
    require_once("funciones.php");
    $conexion = Conexion();
    $registros = mysqli_query($conexion,"delete from usuario where usuario ='$_REQUEST[usuario]'") or die ("Problemas en el SQL".mysqli_error());
    echo "Se eliminó el usuario";  

}   

