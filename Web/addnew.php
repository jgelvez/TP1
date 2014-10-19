<?php
require_once 'conexion.php';
$consulta = "select nombre from categoria";
$statement1 = $pdo->query($consulta);
$row = $statement1->fetchAll(PDO::FETCH_ASSOC);

$usuario = $_SESSION['usuario'];
$foteico = $_SESSION['perfil'];
$id = $_SESSION['papota'];
if (empty($_SESSION['usuario'])) {

    header("Location: index.php");
    die();
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
    <script src="js/checkmap.js"></script>
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB2ZFJo7Z-BxPyI9ZlAeFzz2YSSLWgfT68&sensor=false">
    </script>
    <script src="js/maps.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script src = "js/jquery.js"></script> 
    <script src="js/bootstrap-modal.js"></script>
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
                    <p style="color: white;margin:auto ">Busqueda</p>
                    <input id="search" type="text" name="search" placeholder="buscar" style="margin-left: 30px;width:280px" >
                    <button  class="btn-primary">Buscar</button>
                </div>


                <div class="col-md-4" >                  
                    <label style="margin-left:130px;color: white"><?php echo"$usuario" ?></label>
                    <a style="margin-top:50px ;margin-left: -50px" class="btn btn-success" href="<?php session_destroy();?>index.php">Cerrar Session</a>


                    <div class="img-rounded"  
                         style="margin-left:300px;margin-top: -80px; width: 
                         70px;height: 70px;background-image:url('images/user_profile/<?php echo"$foteico" ?>');
                         background-size: 100%;background-repeat: no-repeat ">

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
                        <form action="lugaradd.php" method="POST" enctype="multipart/form-data">

                            <h2>Alta Lugar </h2>
                            <label>Nombre de lugar</label> <br>          
                            <input name="nameL" type="text"  placeholder="Nombre Lugar"><br>
                            <label>Direccion</label><br>      
                            <input name="dirL" type="text"  placeholder="Direccion"><br>
                            <label>Detalle</label>  <br>         
                            <input  style="height: 60px" name="detL" type="text"  placeholder="Detalle">
                            <div id ="map_canvas" style ="width: 300px; height: 300px">m

                            </div> 
                            <label>Categoria</label><br>
                            <select name="categoria">                                
                                <?php foreach ($row as $rows): ?>                        
                                    <option  style="margin-top: 10px"><?php echo $rows['nombre'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <input name="latL" type="hidden" id="lati" value="$('map_canvas')."/><br>   
                            <input  name="lonL" type="hidden" id="longi" value="$('map_canvas')."><br>
                            <input name="id" type="hidden" value="<?php echo $id ?>"><br>
                            <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                            Foto de Lugar: <input type="file" name="uploadFile"><br>

                            <button type="submit" class="btn btn-success">Guardar</button>





                        </form>
                    </div>
                </div>  
            </div>
            <div class="col-md-2" >       

                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="addnew.php">Registrar Lugar</a></li>
                    </ul>
                </nav>

            </div>
        </div>






    </div>



</body>


