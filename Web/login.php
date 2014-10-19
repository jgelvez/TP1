<?php

require_once 'conexion.php';

$usuario = $_POST["user"];
$contrasena = sha1($_POST["passwd"]);

try {
    $consulta = "SELECT usuario_nombre,foto_perfil,idusuario,rol FROM usuario WHERE usuario_nombre = '$usuario' AND contrasena= '$contrasena' ";
    $statement1 = $pdo->query($consulta);
    $row = $statement1->fetch(PDO::FETCH_ASSOC);



    if (!empty($row)) {

        $_SESSION['usuario'] = $row['usuario_nombre'];
        $_SESSION['perfil'] = $row['foto_perfil'];
        $_SESSION['papota'] = $row['idusuario'];
        $_SESSION['rolete'] = $row['rol'];
        if ($row['rol'] == 2) {
            header("location: sites/admin/admin.php");
            die();
        } else {
            header("location: addnew.php");
            die();
        }
    } else {
        echo "No existe ningun usuario con los datos ingresados";
        header("location: index.php");
        die();
    }
} catch (Exception $ex) {
    echo "$ex";
    echo "<br>";
    echo "hubo un error al solicitar los datos ";
}
 