<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, apellidos, nombres, gru, ind, t1, t2, t3, cua, soc, per, pro, val, acu FROM curso9a order by apellidos");
$juegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12">
        <h1>Notas de estudiantes curso 9A</h1>
    </div>
    <div class="col-12">

        <table border CELLPADDING=2 CELLSPACING=2 bgcolor= class="table">
            <thead bgcolor="yellow">
                <tr align=center>
                    <th></th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Grupo</th>
                    <th>Individual</th>
                    <th>Tar.1</th>
                    <th>Tar.2</th>
                    <th>Tar.3</th>
                    <th>Cuad.</th>
                    <th>Soci.</th>
                    <th>Pers.</th>
                    <th>Nota.</th>
                    <th>Valoracion.</th>
                    <th>Acum.</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($juegos as $juego) { ?>
                    <tr bgcolor="white">
                         <td align=center><?php echo $juego["id"] ?></td>
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
                        <td bgcolor="pink" align=center><?php echo $juego["pro"] ?></td>
                        <td align=center><?php echo $juego["val"] ?></td>
                        <td align=center><?php echo $juego["acu"] ?></td>

                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>