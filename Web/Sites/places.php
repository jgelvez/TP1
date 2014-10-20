<?php
require_once 'conexion.php';
$id = $_POST["Idt"];

try {
    $consulta = "SELECT * FROM lugar WHERE idlugar = '$id' ";
    $statement1 = $pdo->query($consulta);
    $row = $statement1->fetch(PDO::FETCH_ASSOC);

    $consulta2 = "select nombre from categoria";
    $statement2 = $pdo->query($consulta2);
    $categoria = $statement2->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    echo "$ex";
    echo "<br>";
    echo "hubo un error al solicitar los datos ";
}
?>
<script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB2ZFJo7Z-BxPyI9ZlAeFzz2YSSLWgfT68&sensor=false">
</script>
<script src = "../js/jquery.js"></script> 
<script src="../js/bootstrap-modal.js"></script>
<script src="../js/maps.js"></script>
<script src="../js/checkmap.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
<script language="javascript">
            window.onload = function () {
                mapamod('<?php echo $row['latitud'] ?>', '<?php echo $row['longitud'] ?>');
            }
</script>
</script>

<body>
    <div class="container-fluid" id="principal">  

        <div class="sticky" style="z-index:2;">
            <div class="row" id="head" style="background-color: black ; height: 100px;";>

                <div class="col-md-4">
                    <img src="../images/logo.png">
                </div> 


                <div class="col-md-4">
                    <p style="color: white;margin:auto ">Busqueda</p>
                    <input id="search" type="text" name="search" placeholder="buscar" style="margin-left: 30px;width:280px" >
                    <button  class="btn-primary">Buscar</button>
                </div>


                <div class="col-md-4" >                  
                    <label style="margin-left:130px;color: white"></label>
                    <a style="margin-top:50px ;margin-left: -50px" class="btn btn-success" href="<?php session_destroy(); ?>index.php">Cerrar Session</a>


                    <div class="img-rounded"  
                         style="margin-left:300px;margin-top: -80px; width: 
                         70px;height: 70px;background-image:url('../images/user_profile/');
                         background-size: 100%;background-repeat: no-repeat ">

                    </div>
                </div>
            </div>        


        </div>
        <div class="col-md-12" style="">
            <div class="col-md-6" id="content" style="margin: auto 0px auto 0px">
                <div style="margin-left:350px">
                    <form action="sites/places_mod.php" method="POST" enctype="multipart/form-data">

                        <h2>Modificacion lugar</h2>
                        <label>Nombre de lugar</label> <br>          
                        <input name="nameL" type="text"  value="<?php echo $row ['nombre_lugar'] ?>"><br>
                        <label>Direccion</label><br>      
                        <input name="dirL" type="text"  value="<?php echo $row ['direccion'] ?>"><br>
                        <label>Detalle</label>  <br>         
                        <input  style="height: 60px" name="detL" type="text" value="<?php echo $row ['descripcion'] ?>">
                        <div id ="map_canvas" style ="width: 300px; height: 300px">

                        </div> 
                        <label>Categoria</label><br>
                        <select name="categoria">                                
                            <?php foreach ($categoria as $categorias): ?>                        
                                <option  style="margin-top: 10px"><?php echo $categorias['nombre'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <input name="latL" type="hidden" id="lati" value="<php"/><br>   
                        <input  name="lonL" type="hidden" id="longi" value="$('map_canvas')."><br>
                        <input name="id" type="hidden" value=""><br>
                        <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                        Foto de Lugar: <input type="file" name="uploadFile"><br>

                        <button type="submit" class="btn btn-success">Guardar</button>





                    </form>
                </div>

            </div>



            <div class="col-md-2" style="float:right" >       

                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active"><a href="index.php">Usuarios</a></li>
                        <li><a href="#" onclick="cargar('places_admin.php');
                                return false">Lugares</a></li>
                    </ul>
                </nav>

            </div>
        </div>

    </div>
</body>










