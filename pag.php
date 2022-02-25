<style>
.paginacion {
	width: 100%;
	overflow: hidden;
	font-size: 14px;
	font-family: sans-serif;
	max-width: 600px;
	margin: 60px auto;
	background: #f5f5f5;
	padding: 20px;
	border: 1px solid #ddd;
	border-radius: 3px;
}
.paginacion h1 {
	margin: 0;
    padding: 0;
    font-size: 20px;
    font-weight: 500;
}
.paginacion ul {
	list-style: none;
}
.paginacion ul li {
	margin: 4px 0;
}
.paginacion span a {
	text-decoration: none;
    width: 26px;
    height: 26px;
    border-radius: 3px;
    border: 1px solid #ddd;
    display: inline-block;
    text-align: center;
    line-height: 26px;
    background: #fff;
}
</style>

	
<?php 

$conexion = mysqli_connect('localhost', 'root', '', 'notas2022');
if(!$conexion){
	echo 'Error al conectar';
	die();
}

mysqli_set_charset($conexion, 'utf8');

//cantidad por pagina
$porpagina = 6;

//máximo de botones
$botones = 6;

if(!isset($_GET['pagina'])) $indice = 0 ; else $indice = ($_GET['pagina']-1) * $porpagina;


$totalpost = $conexion->query("SELECT * FROM curso9a");


$paginas = $totalpost->num_rows / $porpagina;


$consulta = $conexion->query("SELECT * FROM curso9a ORDER BY id DESC LIMIT $indice, $porpagina");


?>
<div class="paginacion">


<h1>Listado de posts</h1>
<ul>

<?php if( $consulta->num_rows > 0 ){
while( $res = $consulta->fetch_array() ){ ?>
 
		<li>#<?php echo $res['id'] ?>: <?php echo $res['pagina'] ?></li>
	<?php 
} }?>
</ul>


<?php if( $consulta->num_rows > 0 ){


$inicioboton = 1;
if( isset($_GET['pagina']) ){
	$inicioboton = $_GET['pagina']-1;
	if( $_GET['pagina']==1 ){
		$inicioboton = $_GET['pagina'];
	}
}

$botones = $botones + $inicioboton;

if( ($botones) > $paginas ){
	$botones = $paginas + 1;
} 


for ( $i= $inicioboton; $i < $botones; $i++ ) { ?>
	<span><a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></span>
<?php } } ?>

