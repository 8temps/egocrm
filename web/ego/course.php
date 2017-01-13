<?php include_once("session.php"); ?>
<?php
	// Recogemos el id
	$sid = $_GET['id'];
	$course = array(
		'name' => '',
		'age' => '',
		'description' => '',
		'time' => '',
		'group' => '',
		'theme' => '',
		'schedule' => '',
		); 

	// Buscamos el curso y recogemos toda la informacion
	$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);

	// Check connection
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}

	$sHtml = '';
	$sQuery = "SELECT *
				FROM ego_courses	
				WHERE public_web = 1
				AND id = \"". $sid ."\"";

		
	$resQuery = $conn->query($sQuery);

	if ($resQuery->num_rows > 0) {
		while($rowQuery = $resQuery->fetch_assoc()) {
			$course['name'] = $rowQuery['name'];
			$course['age'] = 'de ' . $rowQuery['age_min'] . ' à ' . $rowQuery['age_max'];
			$course['description'] =  nl2br($rowQuery['promotion_web']);
			$course['image'] = $urlimage . 'index.php?entryPoint=download&id=' . $sid .'_promotion_image&type=EGO_Courses';
			$course['groupe'] = ' de ' . $rowQuery['student_min'] . ' à ' . $rowQuery['student_max'] . ' personnes'; 
			$course['student_min'] = $rowQuery['student_min'];
			$course['student_max'] = $rowQuery['student_max']; 
			$course['programme'] = $rowQuery['folder'];
			// Buscamos cursos con el mismmo nombre para realizar un horario completo
			$sQuery = "SELECT day, scheduletime_start, scheduletime_end 
					FROM ego_courses
					WHERE name like '" . $course['name'] . "'";		
			$resQuery = $conn->query($sQuery);
			if ($resQuery->num_rows > 0) {
				while($rowQuery = $resQuery->fetch_assoc()) {
					$course['schedule'] .= '<li>' . convert_day_to_text2($rowQuery['day']) . ' de ' . $rowQuery['scheduletime_start'] . ' à ' . $rowQuery['scheduletime_end'] . '</li>';
				}
			}
		}
		
	}	// Cours
	$conn->close();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once("head.php"); ?>
		<link rel="stylesheet" href="assets/css/materialbutton.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/signup-form.css" type="text/css" />
	</head>
	<body>
	<div id="wrapper">	<!-- Wrapper total-->
		<div id="main"> <!-- Main -->
			<div class="inner">
				<header id="header">
					<h1><span class="fa fa-bullhorn"></span> <?=$course['name'];?></h1>
				</header>
				<section id="banner">
					<div class="content">
						<ul class="detail-course">
							<li><span class="fa fa-child"> âge recommandé : <?=$course['age'];?></li>
							<li><span class="fa fa-group "></span> Groupe: <?=$course['groupe']; ?></li>
							<li><span class="fa fa-folder"></span>Programme:</li>
							<li><span class="fa fa-calendar  "></span> Horaires:
							<ul class="horaire-course">
								<?=$course['schedule'];?>
							</ul>
						</ul> <!-- detail-course -->
						<hr />
						<?=$course['description']; ?>
					</div>
					<span class="image object">
						<img src="<?=$course['image'];?>" alt="" />
					</span>
				</section>
			</div> <!-- .inner -->
		</div> <!-- Main -->
		<!-- Menu / Sidebar -->
		<?php include_once("sidebar.php"); ?>
	</div> <!-- Wrapper total-->
	<?php include_once("scripts.php"); ?>

	</body>
</html>
