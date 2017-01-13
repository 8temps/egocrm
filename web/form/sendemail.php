<?php
/* **
 * Formulario para enviar email a traves de suitecrm
 * 
 * Enviar email a circosphere
 * Si el email del usuario existe - no hacemos nada - suitecrm creará el historico
 * Si el email del usuario no existe + Crear Leads en suiteCRM
 */


// Config
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';
require '../api.suitecrm.v4.php';
use Mailgun\Mailgun;
/** 
 * Enviar un emai utiliozando las credenciales de smtp
 * required PhpMailer
 */
function send_mail($Email, $Text) {
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.circosphere.ch';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'info@circosphere.ch';                 // SMTP username
	$mail->Password = 'OKMijn150';                           // SMTP password
	//$mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to

	$mail->setFrom('from@example.com', 'Mailer');
	$mail->addAddress('8temps@gmail.com', 'Joe User');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject' . $_POST['firstname'];
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$bStatus = $mail->send();

		
	return $bStatus;
} // send_email




/*
 * Busca en el modulo Contacts por el email,
 * si existe, devuelve TRUE
 */
function isset_contactemail($email){
	//retrieve records ------------------------------------- 
    $get_entry_list_parameters = array(

         //session id
         'session' => $session_id,
         //The name of the module from which to retrieve records
         'module_name' => "Contacts",
         //The SQL WHERE clause without the word "where".
         'query' => "contacts.id in (SELECT eabr.bean_id 
				FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) 
				WHERE eabr.deleted=0 and ea.email_address LIKE '". $email ."%')",

         //The SQL ORDER BY clause without the phrase "order by".
         'order_by' => "",

         //The record offset from which to start.
         'offset' => "0",

         //Optional. The list of fields to be returned in the results
         'select_fields' => array(
              'id',
              'first_name',
              'last_name',
         ),

         //The maximum number of results to return.
         'max_results' => '2',

         //To exclude deleted records
         'deleted' => 0,

         //If only records marked as favorites should be returned.
         'Favorites' => false,

    );

	$get_entry_list_result = call("get_entry_list", $get_entry_list_parameters, $url);
	if ($get_entry_list_result->total_count == 0 ) {
		return false;
	} else {	// exist
		return true;
	}
} //isset_contactemail



	/*
	 * Ciclo logico para el envio de emails
	 */
	
	$first_name = (empty($_POST['first_name'])) ? "Anonymous" : $_POST['first_name'];
	$last_name = (empty($_POST['last_name'])) ? "Anonymous" : $_POST['last_name'];
	$phone_work = (empty($_POST['phone_work'])) ? "" : $_POST['phone_work'];
	$lead_source = (empty($_POST['lead_source'])) ? "Web Site" : $_POST['lead_source'];
	$lead_description = (empty($_POST['lead_description'])) ? "" : $_POST['lead_description'];
	$email = (empty($_POST['email'])) ? "error" : $_POST['email'];
	$status=0;

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

    if (!isset_contactemail($email)) {
		echo "Creando leads...<br>";
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
				  array("name" => "first_name", "value" => $first_name),
				  array("name" => "last_name", "value" => $last_name),
				  array("name" => "phone_work", "value" => $phone_work),
				  array("name" => "email1", "value" => $email),
				  array("name" => "lead_source", "value" => 'Web site'),
			 ),
		);
		$set_entry_result = call("set_entry", $set_entry_parameters, $url);
		echo "Procesando informacion...<br>";
		
		echo "Enviando email ...";
		# First, instantiate the SDK with your API credentials and define your domain. 
		$mg = new Mailgun("key-49583ac471f8d35b7d7ac30f9ca68832");
		$domain = "sandboxbd51f3575ed04b019f535684c03d0461.mailgun.org";

		# Now, compose and send your message.
		$mg->sendMessage($domain, array('from'    => 'info@circosphere.ch', 
										'to'      => '8temps@gmail.com', 
										'subject' => 'The PHP SDK is awesome!', 
										'text'    => 'It is so simple to send a message.'));
		
		echo "fin";
		$status = 1;
	} // if
	
	$sURL = 'Location: email.php' . '?status=' . $status;
	header($sURL);
?> 
