<?php
require_once 'conexion.php';
/*
$usuario = $_SESSION['usuario'];
$foteico = $_SESSION['perfil'];
$id = $_SESSION['papota'];
if (empty($_SESSION['usuario'])) {

    header("Location: index.php");
    die();
}
 * 
 */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><head>
    <title>GOTRELEW</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/checkmap.js"></script>
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB2ZFJo7Z-BxPyI9ZlAeFzz2YSSLWgfT68&sensor=false">
    </script>
    <script src="js/maps.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script src = "js/jquery.js"></script> 
    <script src="js/bootstrap-modal.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">

<script>
function cargar(pagina)
{
     $('#content').load(pagina);
}
</script>

</head>





<body onload="initialize()">
    <div class="container-fluid" id="principal">  

        <div class="sticky" style="z-index:2;">
            <div class="row" id="head" style="background-color: black ; height: 100px;";>

                <div class="col-md-4">
                    <img src="images/logo.png">
                </div> 


                <div class="col-md-4">
                    <p style="color: white;margin:auto ">Busqueda</p>
                    <input id="search" type="text" name="search" placeholder="buscar" style="margin-left: 30px;width:280px" >
                    <button  class="btn-primary">Buscar</button>
                </div>


                <div class="col-md-4" >                  
                    <label style="margin-left:130px;color: white"></label>
                    <a style="margin-top:50px ;margin-left: -50px" class="btn btn-success" href="<?php session_destroy();?>index.php">Cerrar Session</a>


                    <div class="img-rounded"  
                         style="margin-left:300px;margin-top: -80px; width: 
                         70px;height: 70px;background-image:url('images/user_profile/');
                         background-size: 100%;background-repeat: no-repeat ">

                    </div>
                </div>
            </div>        


        </div>
        <div class="col-md-12" id="CONTENIDO">
            <div class="col-md-6" id="content" style="margin: auto 0px auto 0px">


            </div>



            <div class="col-md-2" style="float:right" >       

                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active"><a href="index.php">Usuarios</a></li>
                        <li><a href="#" onclick="cargar('places_admin.php'); return false">Lugares</a></li>
                    </ul>
                </nav>

            </div>
        </div>






    </div>



</body>


