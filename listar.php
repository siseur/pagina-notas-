<?php
include_once "../9a/encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, apellidos, nombres, gru, ind, t1, t2, t3, cua, soc, per, pro, val, acu FROM curso9a");
$juegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success my-2" href="nombres.php">Agregar nuevo</a>
        <table class border ="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Grupo</th>
                    <th>Individual</th>
                    <th>Tarea 1</th>
                    <th>Tarea 2</th>
                    <th>Tarea 3</th>
                    <th>Cuad.</th>
                    <th>Social</th>
                    <th>Personal</th>
                    <th>Nota</th>
                    <th>Valor</th>
                    <th>Acum</th>


                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($juegos as $juego) { ?>
                    <tr>
                        <td><?php echo $juego["id"] ?></td>
                        <td align=left><?php echo $juego["apellidos"] ?></td>
                        <td align=left><?php echo $juego["nombres"] ?></td>
                        <td align=center><?php echo $juego["gru"] ?></td>
                        <td align=center><?php echo $juego["ind"] ?></td>
                        <td align=center><?php echo $juego["t1"] ?></td>
                        <td align=center><?php echo $juego["t2"] ?></td>
                        <td align=center><?php echo $juego["t3"] ?></td>
                        <td align=center><?php echo $juego["cua"] ?></td>
                        <td align=center><?php echo $juego["soc"] ?></td>
                        <td align=center><?php echo $juego["per"] ?></td>
                        <td align=center><?php echo $juego["pro"] ?></td>
                        <td align=center><?php echo $juego["val"] ?></td>
                        <td align=center><?php echo $juego["acu"] ?></td>
                    <td>
                            <a href="editar.php?id=<?php echo $juego["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $juego["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>