<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$apellidos = $_POST["apellidos"];
$nombres = $_POST["nombres"];
$gru = $_POST["gru"];
$ind = $_POST["ind"];
$t1 = $_POST["t1"];
$t2 = $_POST["t2"];
$t3 = $_POST["t3"];
$cua = $_POST["cua"];
$soc = $_POST["soc"];
$per = $_POST["per"];
$pro = $_POST["pro"];
$val = $_POST["val"];
$acu = $_POST["acu"];


$pg=15;
$pi=40;
$pc=15;
$ps=15;
$pp=5;

$prog=number_format($gru*$pg/100,2);
$prog=round($prog,2);

$proi=number_format($ind*$pi/100,2);
$proi=round($proi,2);

$cua=($t1+$t2+$t3)/3;
$cua=round($cua,2);
$proc=number_format($cua*$pc/100,2);
$proc=round($proc,2);


$pros=number_format($soc*$ps/100,2);
$pros=round($pros,2);


$prop=number_format($per*$pp/100,2);
$prop=round($prop,2);

$prof=($ind+$gru+$cua+$soc+$per)/5;
$prof=number_format($prof,2);
$pro=round($prof,2);

$acu=($prog+$proi+$proc+$pros+$prop);
$acu=round($acu,2);
$pro=round($acu,2);


if ($acu>=0 && $acu<= 5.99){ $editVal="Bajo"; }
if ($acu>=6 && $acu<= 7.99){ $editVal="Basico"; }
if ($acu>=8 && $acu<= 8.99){ $editVal="Alto"; }
if ($acu>=9 && $acu<= 10){ $editVal="Superior"; }
else{

}

$val=($editVal);


$sentencia = $mysqli->prepare("UPDATE curso9a SET
apellidos = ?,
nombres = ?,
gru = ?,
ind = ?,
t1 = ?,
t2 = ?,
t3 = ?,
cua = ?,
soc = ?,
per = ?,
pro = ?,
val = ?,
acu = ?


WHERE id = ?");
$sentencia->bind_param("ssdddddddddsdi", $apellidos, $nombres, $gru, $ind, $t1, $t2, $t3, $cua, $soc, $per, $pro, $val, $acu, $id);
$sentencia->execute();
header("Location: listar.php");




