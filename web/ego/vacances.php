<?php include_once("session.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once("head.php"); ?>
	</head>
	<body>
	<div id="wrapper">	<!-- Wrapper total-->
		<div id="main"> <!-- Main -->
			<div class="inner">
				<header id="header">
					<span class="fa fa-calendar"></span>Circosphère: VACANCES SCOLAIRES 
				</header>
				<section>
					<div class="content">
						<table>
							<thead>
								<th class="col-sm-4">Vacances</th>
								<th class="col-sm-8">Dates</th>
							</thead>
						
						<?php
							// Show vacances 
							// Create connection
							// TODO: connection with API and not with Mysql
							//~ setlocale(LC_TIME, "fr_FR");
							//~ setlocale(LC_ALL, 'fr_FR');
							$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
							// Check connection
							if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}
							$conn->query("SET lc_time_names = 'fr_FR'");
							$sHtml = '';
							$sQuery = "SELECT id, name, DATE_FORMAT(date_start, '%W %d %M %Y') AS date_start, DATE_FORMAT(date_end, '%W %d %M %Y') AS date_end
										FROM ego_academicyear
										WHERE 
										DATE_FORMAT(date_end, '%Y-%m-%d') >= DATE_FORMAT(now(), '%Y-%m-%d')
										AND public_web = 1
										order by date_start";

							$resQueryYear = $conn->query($sQuery);
							
							if ($resQueryYear->num_rows > 0) {
								while($rowQueryYear = $resQueryYear->fetch_assoc()) {
									echo '<tr><td colspan=2><strong> Periode ' . $rowQueryYear['name'] . ' du ' . $rowQueryYear['date_start'] . ' à ' . $rowQueryYear['date_end']. '</strong></td></tr>';
									$sQuery = "SELECT ego_holidays.id, name, DATE_FORMAT(date_start, '%W %d %M %Y') AS date_start, DATE_FORMAT(date_end, '%W %d %M %Y') AS date_end
											FROM ego_holidays, ego_academicyear_ego_holidays_c	
											WHERE public_web = 1
											AND ego_holidays.id =  ego_academicyear_ego_holidays_c.ego_academicyear_ego_holidaysego_holidays_idb
											AND ego_academicyear_ego_holidays_c.ego_academicyear_ego_holidaysego_academicyear_ida = '" . $rowQueryYear['id'] ."'
											ORDER BY date_start, date_end, name";
									

									$resQuery = $conn->query($sQuery);

									if ($resQuery->num_rows > 0) {
										while($rowQuery = $resQuery->fetch_assoc()) {
											$sHtml = '<tr>';
											$sHtml .= '<td>' . $rowQuery['name'] . '</td>';
											if ($rowQuery['date_start'] == $rowQuery['date_end']){
												$sHtml .= '<td>'. $rowQuery['date_start'] .'</td>';
											} else {
												$sHtml .= '<td> du ' . $rowQuery['date_start']  . ' au ' . $rowQuery['date_end'] .' (date inclus)</td>';
											}
											$sHtml .= '</tr>';
											echo $sHtml;
										}
									}	// if
								}
							}
						?>
						</table>
					</div>
				</section>
			</div> <!-- .inner -->
		</div> <!-- Main -->
		<!-- Menu / Sidebar -->
		<?php include_once("sidebar.php"); ?>
	</div> <!-- Wrapper total-->
	<?php include_once("scripts.php"); ?>
	</body>
</html>
