 <?php
	session_start(); // this MUST be called prior to any output including whitespaces and line breaks!
	/*Just for your server-side code*/
    //header('Content-Type: text/html; charset=ISO-8859-1');
	require_once("vendor/largo/api.suitecrm.v4.php"); // Needs to integrate with suitecrm
	require_once("vendor/largo/cclib.php"); // personal library David Largo
	require_once("config.php");
	// TODO: Realizar una sola configuracion para todo
	//require_once("../../config.php");
?> 
