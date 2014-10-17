<?php
 session_start();

 $usuario = $_POST["user"];
 $contrasena = sha1($_POST["passwd"]);
 

 

 try {
   $pdo = new PDO(
     'mysql:host=localhost;dbname=tp1_bii',
     'root', '');
   
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $pdo->exec("SET NAMES UTF8");
 }
 catch (PDOException $e) {
   echo 'Error de conexión a la BD: ' . $e->getMessage();
 }
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
 