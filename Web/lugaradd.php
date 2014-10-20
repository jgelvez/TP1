<?php
require_once 'conexion.php';
$descripcion = $_POST["detL"];
$direccion = $_POST["dirL"];
$latitud = $_POST["latL"];
$longitud = $_POST["lonL"];
$nombre = $_POST["nameL"];
$categoria = $_POST["categoria"];
$idpersona = $_POST["id"];


$uploaddir = 'images/place_image/';

$uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);


$tmpfile= sha1($uploadfile).".jpg";


    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploaddir.$tmpfile)) {
        echo "El archivo es válido y fue cargado exitosamente.\n";
    } else {
        echo "Error en la carga de archivos !\n";
         header("location:index.php");
        die();
    }



$consulta = "SELECT * FROM categoria";
     $statement1 = $pdo->query($consulta);
     $row = $statement1->fetchAll(PDO::FETCH_ASSOC);
     foreach ($row as $rows ) {
    

     if($categoria == $rows['nombre']){
         
         $id= $rows['idcategoria'];
     }

}

try {
$pdo->beginTransaction();
$pdo->exec(
"INSERT INTO lugar (categoria_idcategoria, idusuario, nombre_lugar, descripcion, latitud, longitud, direccion, foto_perfil)
      VALUES ('$id','$idpersona','$nombre', '$descripcion', '$latitud', '$longitud','$direccion','$tmpfile')"
);



$pdo->commit();

sleep(5);
header("location:index.php");
die();
}
 catch (PDOException $e) {
   echo 'Error al guardar los datos ' . $e->getMessage();
 }
 