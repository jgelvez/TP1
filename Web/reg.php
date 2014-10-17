<?php

session_start();
$nombre = $_POST["name"];
$apellido = $_POST["ape"];
$user = $_POST["usuario"];
$email = $_POST["email"];
$nacim = $_POST["nac"];
$passwd = sha1($_POST["passwd"]);
$uploaddir = 'images/user_profile/';

$uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);


$tmpfile= sha1($uploadfile).".jpg";

echo "$tmpfile";


    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploaddir.$tmpfile)) {
        echo "El archivo es v�lido y fue cargado exitosamente.\n";
    } else {
        echo "Error en la carga de archivos !\n";
        sleep(5);
         header("location:index.php");
        die();
    }
require_once 'conexion.php';


try {
    $pdo->beginTransaction();
    $pdo->exec(
            "INSERT INTO usuario (idusuario,apellido, nombre,  usuario_nombre, contrasena , email, foto_perfil, fecha_nac)
      VALUES ('$id','$apellido', '$nombre', '$user', '$passwd','$email','$tmpfile', '$nacim')"
    );



    $pdo->commit();  //se guardaría todo “definitivamente�?

    sleep(5);
    header("location:index.php");
    die();
     
} catch (PDOException $e) {
    $pdo->rollBack();  //ante cualquier excepción, revierte todo
    echo 'La operación ha fallado: ' . $e->getMessage();
}
?>
