<?php
 session_start();
 $usuario = "pepe";


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
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script src="js/jquery.js"></script> 
    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap-modal.js"></script> 
    <script src="js/staticdiv.js"></script> 
    <script src="js/contenido.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>



<body>
    <div class="container-fluid" id="principal">  

        <div class="sticky" style="z-index:2;">
            <div class="row" id="head" style="background-color: black ; height: 100px;";>

                <div class="col-md-4">
                    <img src="images/logo.png">
                </div> 


                <div class="col-md-4">
					<form action="buscar_controlador.php" method="POST"><!--agrege yo patty-->
                    <p style="color: white;margin:auto ">Busqueda</p>
                    <input id="search" type="text" name="search" placeholder="buscar" style="margin-left: 30px;width:280px" >
                    <button  class="btn-primary">Buscar</button>
                </div>


                <div class="col-md-4" >              

                    <a style="margin-top: 50px;margin-left: 120px; background-color: #0082fb ; border-color: #0082fb" data-toggle="modal" href="#myModal" class="btn btn-warning">inciar Session</a>
                    <a style="margin-top: 50px;" href="registrar.php" class="btn btn-warning" role="button">Registrarse</a>
                </div>
            </div>        


        </div>

        <div class="row" >

            <div  style="margin:0;margin-left: 320px; position:absolute; z-index: 0">
                <?php include('slide.html'); ?> 
            </div>


            <div id="iconos" style="position: absolute;margin-top:380px ;z-index:2">
                <div class="iconos" id="icon1">
                    <a href="javascript:Carga(cargar.html, contenido)">
                        <img class="icon" src="images/icon1.png">
                        <p class="texto">Comida</p>
                    </a>
                </div>
                <div class="iconos" id="icon2">
                    <img class="icon" src="images/icon2.png">
                    <p class="texto">Bares</p>
                </div>
                <div class="iconos" id="icon3">
                    <img class="icon" src="images/icon3.png">
                    <p class="texto">Hoteles</p>
                    <script>$("#contenido").html("www.google.com");</script>
                </div>
                <div class="iconos" id="icon4">
                    <img class="icon" src="images/icon4.png">
                    <p class="texto">Arte</p>
                </div>
            </div>
        </div>  
        <div id="bar" class="row" style="background-color: black; margin-top: 310px;height: 50px">
            <div class="nav-bar"></div>

        </div> 

        <div class="row" style="background-color: white">
            <div class="col-md-3" >             


            </div>
            <div class="col-md-7" style="margin-top: 420px;">             
                <div id="contenido" class="contenido">
                    <p>ACA VA EL CONTENIDO</p>
                </div>
            </div>




            <div class="modal" id="myModal" style="background-color: white; height: 380px; width: 450px; margin: auto;border-radius: 5px">
                <div class="modal-header" style="margin: auto">
                    <a class="close" data-dismiss="modal">×</a>
                    <h1>Iniciar Session</h1>
                </div>
                <div class="modal-body"style="margin: auto">
                    <form action="login.php" method="post">
                        <h3>Usuario</h3>
                        <input class="form-control" name="user"type="text" placeholder="Usuario">
                        <h3>Contraseña</h3>
                        <input class="form-control" name="passwd" type="text" placeholder="Contraseña">


                        <div class="modal-footer">
                            <a href="" class="btn btn-primary">Cerrar</a>
                            <button type="submit" class="btn btn-success">Iniciar Session</button>
                        </div>
                    </form>
                </div>
            </div> 


            </body>

