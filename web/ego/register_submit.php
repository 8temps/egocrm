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
					<span class="fa fa-calendar"></span>Circosphère: INSCRIPTIONS AUX COURS
				</header>
				<section>
<?php
    //login --------------------------------------------
    $login_parameters = array(
         "user_auth" => array(
              "user_name" => $username,
              "password" => md5($password),
              "version" => "1"
         ),
         "application_name" => "RestTest",
         "name_value_list" => array(),
    );

    $login_result = call("login", $login_parameters, $url);

    /*
    echo "<pre>";
    print_r($login_result);
    echo "</pre>";
    */

    //get session id
    $session_id = $login_result->id;
   //create leads ------------------------------------- 
    $set_entry_parameters = array(
         //session id
         "session" => $session_id,

         //The name of the module from which to retrieve records.
         "module_name" => "Leads",

         //Record attributes
         "name_value_list" => array(
              //to update a record, you will nee to pass in a record id as commented below
              //array("name" => "id", "value" => "9b170af9-3080-e22b-fbc1-4fea74def88f"),
              array("name" => "first_name", "value" => $_POST['first_name']),
              array("name" => "last_name", "value" => $_POST['last_name']),
              array("name" => "phone_work", "value" => $_POST['phone_work']),
              array("name" => "phone_mobile", "value" => $_POST['phone_mobile']),
              array("name" => "primary_address_street", "value" => $_POST['primary_address_street']),
              array("name" => "email1", "value" => $_POST['email1']),
         ),
    );

    $set_entry_result = call("set_entry", $set_entry_parameters, $url);
    
    // Relation ego_courses_leads_c
    if (!empty($set_entry_result->id)){
		$lead_id = $set_entry_result->id;
		// Array from checkbox
		$courses = $_POST['courses'];
		foreach ($courses as $course_id){
			$set_relationship_params = array(
						'session' => $session_id,
						'module_name' => 'EGO_Courses', // custom module, where the relationship was created, "primary module"
						'module_id' => $course_id, // id of site, get from set_entry call 
						'link_field_name' => 'ego_courses_leads', // the LINK field type name, from Step 5  
						'related_ids' => array($lead_id), // id of Account you want to relate to 
						//'name_value_list' => array(),
						//'delete' => 0, //Whether or not to delete the relationship. 0:create, 1:delete
					);
			$set_relationship_result = call("set_relationship",$set_relationship_params, $url); 
		}	//foreach
		include("register_success.php");
	} else { // Error 
		include("register_error.php"); 
		}
?>
			
			</section>
			</div> <!-- .inner -->
		</div> <!-- Main -->
		<!-- Menu / Sidebar -->
		<?php include_once("sidebar.php"); ?>
	</div> <!-- Wrapper total-->
	<?php include_once("scripts.php"); ?>
	</body>
</html>
