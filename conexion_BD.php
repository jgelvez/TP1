 <?php
 error_reporting(E_ALL);
 ini_set("display_errors", true);
 header('Content-Type: text/html; charset=UTF-8');
 
 try {
   $pdo = new PDO(
     'mysql:host=localhost;dbname=tp1_BII',
     'root', 'soylomas2011');//123456
   
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $pdo->exec("SET NAMES UTF8");
 }
 catch (PDOException $e) {
   echo 'Error de conexión a la BD: ' . $e->getMessage();
 }
 
 echo "Conectado a la Base de Datos Tp_Integrador";
