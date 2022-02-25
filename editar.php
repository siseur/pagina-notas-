<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, apellidos, nombres, gru, ind, t1, t2, t3, cua, soc, per, pro, val, acu FROM curso9a WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
# Obtenemos solo una fila, que será el videojuego a editar
$videojuego = $resultado->fetch_assoc();
if (!$videojuego) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar Estudiante</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $videojuego["id"] ?>">
            
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input value="<?php echo $videojuego["apellidos"] ?>" placeholder="Apellidos" class="form-control" type="text" name="apellidos" id="apellidos" required>
            </div>

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input value="<?php echo $videojuego["nombres"] ?>" placeholder="Nombres" class="form-control" type="text" name="nombres" id="nombres" required>
            </div>


<div class="form-group">
                <label for="gru">Grupo</label>
                <input value="<?php echo $videojuego["gru"] ?>" placeholder="Grupo" class="form-control" type="text" name="gru" id="gru" >
            </div>

            <div class="form-group">
                <label for="ind">Individual</label>
                <input value="<?php echo $videojuego["ind"] ?>" placeholder="Individual" class="form-control" type="text" name="ind" id="ind" >
            </div>

            <div class="form-group">
                <label for="t1">Tarea 1</label>
                <input value="<?php echo $videojuego["t1"] ?>" placeholder="Tarea1" class="form-control" type="text" name="t1" id="t1" >
            </div>

             <div class="form-group">
                <label for="t2">Tarea 2</label>
                <input value="<?php echo $videojuego["t2"] ?>" placeholder="Tarea2" class="form-control" type="text" name="t2" id="t2" >
            </div>

 <div class="form-group">
                <label for="t3">Tarea 3</label>
                <input value="<?php echo $videojuego["t3"] ?>" placeholder="Tarea3" class="form-control" type="text" name="t3" id="t3" >
            </div>

                          <div class="form-group">
                <label for="cua"></label>
                <name="cua" id="cua" cols="30" rows="10" >
            </div>


             <div class="form-group">
                <label for="soc">Social</label>
                <input value="<?php echo $videojuego["soc"] ?>" placeholder="Social" class="form-control" type="text" name="soc" id="soc" >
            </div>

             <div class="form-group">
                <label for="per">Personal </label>
                <input value="<?php echo $videojuego["per"] ?>" placeholder="Personal" class="form-control" type="text" name="per" id="per" >
            </div>

             
        <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>