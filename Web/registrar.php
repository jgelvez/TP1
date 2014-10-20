<?php
 session_start();



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
   <!-- <script src = "js/jquery.js"></script> -->
    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">



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
                    <a style="margin-top: 50px;margin-left: 120px; background-color: #0082fb ; border-color: #0082fb" data-toggle="modal" href="#myModal" class="btn btn-warning">inciar Session</a>
                    <a style="margin-top: 50px;" href="registrar.php" class="btn btn-warning" role="button">Registrarse</a>
                </div>
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
        <div class="col-md-7" style="margin-top: 150px;">             
            <div id="contenido" class="contenido">
                <div style="margin-left:150px">
                    <form action="POST" enctype="multipart/form-data" method="POST" id="validar">

                        <h2>Registrar</h2>
                        <label>Nombre</label> <br>          
                        <input name="name" type="text" placeholder="Nombre" ><br>
                        <label>Apellido</label><br>      
                        <input name="ape" type="text" placeholder="Apellido" ><br>
                        <label>Email</label><br>      
                        <input name="email" type="text" placeholder="Email" ><br>
                        <label>Usuario</label>  <br>         
                        <input name="usuario" type="text" placeholder="Usuario" ><br>
                        
                        <label>Fecha Nacimiento</label>  <br>         
                        <input name="nac" type="date" name="Usuario" ><br>

                        <label>Contraseña</label>  <br>    
                        <input name="passwd" type="password"  name="password" placeholder="contraseña"/><br>
                        <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                        Foto de Perfil: <input type="file" name="uploadFile"><br>
                        <button class="btn btn-warning" type="submit">Registrarse</a>                           






                    </form>
                </div>
            </div>  
        </div>
        <div class="col-md-2" >       

            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                </ul>
            </nav>

        </div>
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
            <input class="form-control" type="text" placeholder="Usuario">
            <h3>Contraseña</h3>
            <input class="form-control" type="text" placeholder="Contraseña">


            <div class="modal-footer">
                <a href="" class="btn btn-primary">Cerrar</a>
                <button type="submit" class="btn btn-success">Iniciar Session</button>
            </div>
        </form>
    </div>

</div> 



</body>

