<?php

session_start();
require 'validacion.php';
include('error.class.php');

$nombre = $_POST["name"];
$apellido = $_POST["ape"];
$user = $_POST["usuario"];
$email = $_POST["email"];
$nacim = $_POST["nac"];
$rol = 2;
$passwd = sha1($_POST["passwd"]);
$uploaddir = 'images/user_profile/';

$uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);


$tmpfile= sha1($uploadfile).".jpg";

echo "$tmpfile";

	if (verificar_password_strenght($passwd)===false){
		echo Error::display('Escriba una contraseña válida',0,'warning','Contraseña');
		}

	if (valDate($nacim)===false){
		
		echo Error::display(' una fecha válida (AAAA-MM-DD)',0,'warning','Fecha');
		
		}	

    if (validaEmail($email)===false){
		
		echo Error::display('Escriba un mail válido',0,'warning','Email');
		
		}
	

    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploaddir.$tmpfile)) {
        echo "El archivo es válido y fue cargado exitosamente.\n";
    } else {
        echo "Error en la carga de archivos !\n";
        sleep(5);
        // header("location:index.php");
        die();
    }
try {
    $pdo = new PDO(
            'mysql:host=localhost;dbname=tp1_bii', 'root', '');

    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES UTF8");
} catch (PDOException $e) {
    echo 'Error de conexion a la BD: ' . $e->getMessage();
}


try {
    $pdo->beginTransaction();
    $pdo->exec(
            "INSERT INTO usuario (idusuario,apellido, nombre,  usuario_nombre, contrasena , email, foto_perfil, fecha_nac,rol)
      VALUES ('$id','$apellido', '$nombre', '$user', '$passwd','$email','$tmpfile', '$nacim', '$rol')"
    );



    $pdo->commit();  //se guardarÃ­a todo â€œdefinitivamenteâ€?

    sleep(5);
   // header("location:index.php");
    die();
     
} catch (PDOException $e) {
    $pdo->rollBack();  //ante cualquier excepciÃ³n, revierte todo
    echo 'La operaciÃ³n ha fallado: ' . $e->getMessage();
}
?>
