<?php
/*
 * Menu 
 * Creamos un array con el menu a presentar / incluye los cursos ABIERTOS / CERRADOS Y ACTIVOS
 */
 			
$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}
?>
<nav id="menu">
	<header class="major">
		<a href="index.php"><h2><span class="fa fa-home"></span> Circosphère </h2></a>
	</header>
	<ul>
<!--
		<li><a href="register.php">Inscription aux cours</a></li>
-->
		<?php
			// Calendar for Academicyear
			$sHtml = '';
			$sQuery = "SELECT id, name
						FROM ego_academicyear
						WHERE 
						DATE_FORMAT(date_end, '%Y-%m-%d') >= DATE_FORMAT(now(), '%Y-%m-%d')
						AND public_web = 1
						order by date_start";

			$resQuery = $conn->query($sQuery);
			
			if ($resQuery->num_rows > 0) {
				while($rowQuery = $resQuery->fetch_assoc()) {
					$sHtml = '<li><a href="calendar.php?id='. $rowQuery['id'] .'"> Horaires ' . $rowQuery['name'].'</a></li>';
					echo $sHtml;
				}
			}
		?>
		<li><a href="vacances.php">VACANCES SCOLAIRES</a></li>
		<li>
			<span class="opener">Cours</span>
			<?php
					
			// Show cours with status OPEN for inscription
			// Create connection
			// TODO: connection with API and not with Mysql

			$sHtml = "";
			$sQuery = "SELECT id, name
						FROM ego_courses
						WHERE
						status = 2 OR status = 3 OR status = 4 OR status = 5
						AND public_web = 1
						GROUP BY name
						ORDER BY name";
			$resQuery = $conn->query($sQuery);
			
			if ($resQuery->num_rows > 0) {
				$sHtml .= '<ul>';
				while($rowQuery = $resQuery->fetch_assoc()) {
					$sHtml .= '<li><a href="course.php?id='. $rowQuery['id'] .'">' . $rowQuery['name'].'</a></li>';
				}
				$sHtml .= '</ul>';
				echo $sHtml;
			}	// Cours
			
			
			?>
		</li>
		<li><a href="rate.php">TARIFS </a></li>
		<li><a href="rate.php#conditions">CONDITIONS GÉNÉRALES</a></li>
	</ul>
</nav>
<?php $conn->close(); ?>
