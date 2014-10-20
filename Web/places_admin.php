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


    <?php foreach ($row as $rows): ?>
        <div id="dvcontent"  style="margin-top: 10px; border: 1px solid #e7e7e7; float: ">

            <div id="content"  style="margin-left:120px">
                <h1><?php echo $rows['nombre_lugar'] ?></h1>
                <p><?php echo $rows['descripcion'] ?></p>
            </div>

            <div style="margin-left: 410px" id="botonera">
                <form action='sites/places.php' method="post">
                    <input type="hidden" id="id" name="Idt" value="<?php echo $rows['idlugar']?>">
                    <button  type="submit"onclick="cargar('/places.php'); return false" class="btn btn-warning"  role="button">Modificar</button>
                    <button   name="eliminar" type="submit" class="btn btn-danger" role="button">Eliminar</button><br>
                </form>

            </div>
            <div id="image">
                <img style="height: 90px;width:90px; margin-top: -150px;margin-left: 15px" class="img-rounded" src="images/place_image/<?php echo $rows['foto_perfil'] ?>">
                <br>
            </div>
        </div>   
    <?php endforeach ?>