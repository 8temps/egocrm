<?php
// Recogemos todas las imagenes de vendor/workout
// Mostramos una imagen diferente cada vez
// semilla de microsegundos
function make_seed()
{
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}
srand(make_seed());
$directorio = "vendor/darebee/workout/";
$imagenes  = scandir($directorio);

$x = rand(3, count($imagenes));
$imagen = $directorio . $imagenes[$x];


// CALENDRIER: Today
// Buscamos en vacaciones
// si hay vacaciones mostramos un mensaje de vacaciones
// si no hay buscamos los cursos de ese día

?>
<!-- Header -->
<header id="header">
	<a href="index.php" class="logo"><strong><?=$lbl_web['name'];?></strong> système de gestion de l'école de cirque </a>
</header>

<section id="banner">
	<div class="content">
		<p>
			<?php include("today.php"); ?> <!-- Today -->
		</p>
	</div>
	<span class="image object">
		<h2>Fiches practiques - Travail à la maison</h2>
		<img src="<?php echo $imagen;?>" alt="" />
		<a href="#">images from darebee.com</a>
	</span>
</section>
