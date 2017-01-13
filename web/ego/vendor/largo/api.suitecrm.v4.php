<?php
/**
 * Fichero de configuracion para trabajar con REST API Sugarcrm
 */
	// Direcion REST API
	$url = "http://127.0.0.1/circosphere.ccproduction.ch/ego/service/v4_1/rest.php";
	$urlimage = "http://127.0.0.1/circosphere.ccproduction.ch/ego/";
    // TODO: Crear usuario con permisos especificos para evitar problemas de seguridad
    $username = "admin";
    $password = "admin123";
   
	$db_config = 
		array (
		'db_host_name' => 'localhost',
		'db_host_instance' => 'SQLEXPRESS',
		'db_user_name' => 'ccproduc_ccego',
		'db_password' => 'HegmdGoZ',
		'db_name' => 'ccproduc_circosphereegocrm',
		'db_type' => 'mysql',
		'db_port' => '',
		'db_manager' => 'MysqliManager',
	  );
		
	
	//function to make cURL request
    function call($method, $parameters, $url)
    {
        ob_start();
        $curl_request = curl_init();

        curl_setopt($curl_request, CURLOPT_URL, $url);
        curl_setopt($curl_request, CURLOPT_POST, 1);
        curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($curl_request, CURLOPT_HEADER, 1);
        curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

        $jsonEncodedData = json_encode($parameters);

        $post = array(
             "method" => $method,
             "input_type" => "JSON",
             "response_type" => "JSON",
             "rest_data" => $jsonEncodedData
        );

        curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($curl_request);
        curl_close($curl_request);

        $result = explode("\r\n\r\n", $result, 2);
        $response = json_decode($result[1]);
        ob_end_flush();

        return $response;
    } // call

	/*
	 * 
	 * name: calendarToday
	 * Return of possible event for today
	 * first: search holidays and search ego_courses witdh day (1.- Monday / 7.- Sunday)
	 * @param
	 * @return array [0] = Time / [1] = Name
	 * 
	 * 
	 */
	function calendarToday(){
		// search holiday for today
		$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
		// Check connection
		if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}

		$sHtml = "";
		$sQuery = "SELECT id, name
					FROM ego_courses
					WHERE
					status = 2 OR status = 3 OR status = 4 OR status = 5
					AND public_web = 1
					GROUP BY name
					ORDER BY name";
		$resQuery = $conn->query($sQuery);
		
		if ($resQuery->num_rows > 0) { // holiday
			while($rowQuery = $resQuery->fetch_assoc()) {
			
			}
		} else {	//Search courses
			$sQuery = "SELECT id, name
					FROM ego_courses
					WHERE
					status = 2 OR status = 3 OR status = 4 OR status = 5
					AND public_web = 1
					GROUP BY name
					ORDER BY name";
			$resQuery = $conn->query($sQuery);
			if ($resQuery->num_rows > 0) { // Courses
				while($rowQuery = $resQuery->fetch_assoc()) {
					// Create array
				}
			}
		}
	}
?>
