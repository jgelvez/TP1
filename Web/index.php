<?php
require_once 'conexion.php';
try {
    $consulta = "SELECT * FROM lugar";
    $statement1 = $pdo->query($consulta);
    $row = $statement1->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    echo "$ex";
    echo "<br>";
    echo "hubo un error al solicitar los datos ";
}
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
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>



<body>
    <div class="container-fluid" id="principal">  

        <div class="sticky" style="z-index:3;">
            <div class="row" id="head" style="background-color: black ; height: 100px;";>

                <div class="col-md-4">
                    <img src="images/logo.png">
                </div> 


                <div class="col-md-4">
                    <form action ="buscar_controlador.php" method="post">
                        <p style="color: white;margin:auto ">Busqueda</p>
                        <input  id="search" type="text" name="search" placeholder="buscar" style="margin-left: 30px;width:280px" >
                        <button type ="submit" class="btn-primary">Buscar</button>
                    </form>
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
            <div class="col-md-5" style="margin-top:110px;margin-left: 20px">

                <div id="contenido"  style="float: top;">
                    <?php foreach ($row as $rows): ?>
                    <div id="dvcontent"  style="margin-top: 10px; border: 1px solid #e7e7e7; float: ">
                       
                            <div id="content"  style="margin-left:120px">
                                <h1><?php echo $rows['nombre_lugar'] ?></h1>
                                <p><?php echo $rows['descripcion']?></p>
                            </div>
                        
                            <div style="margin-left: 410px" id="botonera">
                                <form action='/sites/places.php' method="POST">
                                    <a style="" href="sites/places.php" class="btn btn-success" role="button">Mas Info</a><br>
                                    
                                    
                                    
                                </form>
                                
                            </div>
                         <div id="image">
                             <img style="height: 90px;width:90px; margin-top: -150px;margin-left: 15px" class="img-rounded" src="images/place_image/<?php echo $rows['foto_perfil'] ?>">
                            <br>
                        </div>
                        </div>   
                    <?php endforeach ?>
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

