<?php include_once("session.php"); ?>
<?php
	$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
	// Check connection
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}

	if (isset($_GET['id']))
		$idAcademic = $_GET['id'];
	$weekly[0] = array("name" => 'Sunday',"day"=> '7');
	$weekly[1] = array("name" => 'Lundi',"day"=> '1');
	$weekly[2] = array("name" => 'Mardi',"day"=> '2');
	$weekly[3] = array("name" => 'Mercredi',"day"=> '3');
	$weekly[4] = array("name" => 'Jeudi',"day"=> '4');
	$weekly[5] = array("name" => 'Vendredi',"day"=> '5');
	$weekly[6] = array("name" => 'Samedi',"day"=> '6');
	$arrlength = count($weekly);
?> 
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once("head.php"); ?>
		<link rel="stylesheet" href="assets/css/calendar-style.css"> <!-- Resource style -->
	</head>
	<body>
	<div id="wrapper">	<!-- Wrapper total-->
		<div id="main"> <!-- Main -->
			<div class="inner">
				<header id="header">
					<span class="fa fa-calendar"></span>Circosphère: Horaires
				</header>
				<div class="cd-schedule loading">
					<div class="timeline">
						<ul>
							<li><span>09:00</span></li>
							<li><span>09:30</span></li>
							<li><span>10:00</span></li>
							<li><span>10:30</span></li>
							<li><span>11:00</span></li>
							<li><span>11:30</span></li>
							<li style="background-color: #f4f4f4;"><span>12:00</span></li>
							<li><span>12:30</span></li>
							<li><span>13:00</span></li>
							<li><span>13:30</span></li>
							<li><span>14:00</span></li>
							<li><span>14:30</span></li>
							<li><span>15:00</span></li>
							<li><span>15:30</span></li>
							<li><span>16:00</span></li>
							<li><span>16:30</span></li>
							<li><span>17:00</span></li>
							<li><span>17:30</span></li>
							<li><span>18:00</span></li>
							<li><span>18:30</span></li>
							<li><span>19:00</span></li>
							<li><span>19:30</span></li>
							<li><span>20:00</span></li>
							<li><span>20:30</span></li>
							<li><span>21:00</span></li>
						</ul>
					</div> <!-- .timeline -->

					<div class="events">
						<ul>
							<?php for($x = 1; $x < $arrlength; $x++) :?>
							<li class="events-group">
								<div class="top-info"><span><?=$weekly[$x]['name'];?></span></div>
								<?php
									$sHtml = "";
									$sQuery = "SELECT name, age_min, age_max, scheduletime_start, scheduletime_end
												FROM ego_courses, ego_academicyear_ego_courses_c
												WHERE
												ego_courses.deleted = 0
												AND public_web = 1
												AND ego_courses.id = ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb
												AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida='" . $idAcademic . "'"
												. "AND day = " . $weekly[$x]['day'];
												
									$resQuery = $conn->query($sQuery);
									
									if ($resQuery->num_rows > 0) {
										$sHtml = '<ul>';
										while($rowQuery = $resQuery->fetch_assoc()) {
											$sHtml .= '<li class="single-event" data-start="' . $rowQuery['scheduletime_start'] . '" data-end="' . $rowQuery['scheduletime_end'] . '"  data-content="event-detail" data-event="event-1">';
											//~ $sHtml .= '<a href="#0"><em class="event-name">' . $rowQuery['name'] . '</em></a>';
											$sHtml .= '<em class="event-name">' . $rowQuery['name'] . '</em>';
											$sHtml .= '<span class="event-time">' . $rowQuery['scheduletime_start'] . ' - ' . $rowQuery['scheduletime_end'] . '</span>';
											if ($rowQuery['age_min'] != 0 && $rowQuery['age_max'] != 0 ) 
												$sHtml .= '<span class="event-age"> de ' . $rowQuery['age_min'] . ' à ' . $rowQuery['age_max'] . ' ans</span>';
											
											
											$sHtml .=  '</li>';
										} // while
										$sHtml .= '</ul>';
										echo $sHtml;
									}	// if
									 
								?>
							</li>
							<?php endfor; ?>
						</ul>
					</div> <!-- .events -->

					<div class="event-modal">
						<header class="header">
							<div class="content">
								<span class="event-date"></span>
								<h3 class="event-name"></h3>
							</div>

							<div class="header-bg"></div>
						</header>

						<div class="body">
							<div class="event-info"></div>
							<div class="body-bg"></div>
						</div>

						<a href="#0" class="close">Close</a>
					</div> <!-- .event-modal -->

					<div class="cover-layer"></div>
				</div> <!-- .cd-schedule -->
			</div> <!-- .inner -->
		</div> <!-- Main -->
		<!-- Menu / Sidebar -->
		<?php include_once("sidebar.php"); ?>
	</div> <!-- Wrapper total-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/calendar.js"></script> <!-- Resource jQuery -->
	<?php include_once("scripts.php"); ?>
	</body>
</html>
