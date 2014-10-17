<?php
 session_start();

 $usuario = $_POST["user"];
 $contrasena = sha1($_POST["passwd"]);
 
	require_once 'conexion.php';
 

 try {
     $consulta = "SELECT usuario_nombre,foto_perfil FROM usuario WHERE usuario_nombre = '$usuario' AND contrasena= '$contrasena' ";
     $statement1 = $pdo->query($consulta);
     $row = $statement1->fetch(PDO::FETCH_ASSOC);

    $_SESSION['usuario']=$row['usuario_nombre'];
    $_SESSION['perfil']=$row['foto_perfil'];
    header("location:addnew.php");
    die();
} catch (Exception $ex) {
    echo "$ex";
    echo "<br>";
    echo "hubo un error al solicitar los datos ";
     
}
 
