<ul class="dates">
	<li>
		<span class="date"><strong><?=date("d"); ?></strong><?=date("m.Y"); ?></span>
		<h2> Aujourd'hui</h2>
	</li>
</ul>
<ul class="dates-courses">
	<?php
			/*
			 * Show today's activities
			*/

				$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
				// Check connection
				if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}
				
				$sHtml = '';
				$sQuery = "SELECT name, DATE_FORMAT(date_start, '%d %m %Y') AS date_start, DATE_FORMAT(date_end, '%d %m %Y') AS date_end
							FROM ego_holidays
							WHERE  CURDATE() BETWEEN date_start AND date_end
							AND public_web=1";

				$resQuery = $conn->query($sQuery);
				if ($resQuery->num_rows > 0) {	// Holidays
					while($rowQuery = $resQuery->fetch_assoc()) {
							$sHtml = '<li><span class="label-holidays">NOUS SOMMES EN VACANCES</span> de ' . $rowQuery['date_start'] . ' à ' . $rowQuery['date_end'] . ':' . $rowQuery['name'] . '</li>';
					}
				} else {						// Work day
					$sHtml = '';
					$sQuery = "SELECT ego_courses.name, ego_courses.scheduletime_start, ego_courses.scheduletime_end 
								FROM ego_courses, ego_academicyear, ego_academicyear_ego_courses_c
								WHERE
								ego_academicyear.id = ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida
								AND ego_courses.id  = ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb
								AND CURDATE() BETWEEN ego_academicyear.date_start AND ego_academicyear.date_end
								AND ego_courses.day = " . date('N') . "
								AND ego_courses.public_web=1
								ORDER BY ego_courses.scheduletime_start";
			
					$resQuery = $conn->query($sQuery);
					if ($resQuery->num_rows > 0) {	// Holidays
						while($rowQuery = $resQuery->fetch_assoc()) {
							$sHtml .= '<li><strong>' . $rowQuery['name'] . '</strong> de ' . $rowQuery['scheduletime_start'] . ' à ' . $rowQuery['scheduletime_end'] . '</li>';
						}
					}
				} //else if
				echo $sHtml;
	?>
</ul>
