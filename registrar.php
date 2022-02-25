
<?php
$mysqli = include_once "../conexion.php";
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

$acui=number_format($ind*$pi/100,2);
$acui=round($acui,2);

$acug=number_format($gru*$pg/100,2);
$acug=round($acug,2);

$cua=($t1+$t2+$t3)/3;
$cua=round($cua,2);
$acua=number_format($cua*$pg/100,2);
$acua=round($acua,2);

$acus=number_format($soc*$pg/100,2);
$acus=round($acus,2);

$acup=number_format($per*$pg/100,2);
$acup=round($acup,2);

$toacu=($acui+$acug+$acuc+$acus+$acup);
$acu=round($toacu,2);
$pro=round($acu,2);

if ($acu>=0 && $acu<= 5.99){ $editVal="Bajo"; }
if ($acu>=6 && $acu<= 7.99){ $editVal="Basico"; }
if ($acu>=8 && $acu<= 8.99){ $editVal="Alto"; }
if ($acu>=9 && $acu<= 10){ $editVal="Superior"; }

else{

}

$val=($editVal);




$sentencia = $mysqli->prepare("INSERT INTO curso9a (apellidos, nombres, gru, ind, t1, t2, t3, cua, soc, per, pro, val, acu)
VALUES
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
$sentencia->bind_param("ssdddddddddsd", $apellidos, $nombres, $gru, $ind, $t1, $t2, $t3, $cua, $soc, $per, $pro, $val, $acu);
$sentencia->execute();
header("Location:nombres.php");

?>