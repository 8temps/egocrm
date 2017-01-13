<?php include_once("session.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once("head.php"); ?>
		<link rel="stylesheet" href="assets/css/signup-form.css" type="text/css" />
	</head>
	<body>
	<div id="wrapper">	<!-- Wrapper total-->
		<div id="main"> <!-- Main -->
			<div class="inner">
				<header id="header">
							<span class="fa fa-calendar"></span>Circosphère: INSCRIPTION AUX COURSES
				</header>
				<section>
					<div class="inner">
						<?php
									
							// Show cours with status OPEN for inscription
							// Create connection
							// TODO: connection with API and not with Mysql
							
							$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
							// Check connection
							if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}
							
							$nCol = 0;
							$sHtml = "";
							$sQuery = "SELECT * 
									FROM ego_courses
									WHERE deleted = 0
									AND status = 2 
									ORDER BY day";
							$resQuery = $conn->query($sQuery);
							
							if ($resQuery->num_rows > 0) :	// Inscription
						?>
						 <!-- form start -->
						 <form method="post" role="form" id="register-form" autocomplete="off" action="register_submit.php">
						 <div class="form-body">
							<div class="alert alert-info" id="message" style="display:none;"></div>
								<div class="row">
									<div class="form-group col-lg-6">
										<div class="input-group">
											<div class="input-group-addon">Prénom</div>
											<input name="first_name" type="text" class="form-control" placeholder="prénom">
										</div>
										<span class="help-block" id="error"></span>
									</div>
									<div class="form-group col-lg-6">
										<div class="input-group">
											<div class="input-group-addon">Nom</div>
											<input name="last_name" type="text" class="form-control" placeholder="nom">
										</div>
										<span class="help-block" id="error"></span>
									</div>
								</div> <!-- row -->
								<div class="row">
									<div class="form-group col-lg-12">
										<div class="input-group">
											<div class="input-group-addon">Tutor</div>
											<input name="tutor" type="text" class="form-control" placeholder="prenom">
										</div>
										<span class="help-block" id="error"></span>
									</div>
									
								</div> <!-- row -->
								<div class="row">
									<div class="form-group col-lg-12">
										<div class="input-group">
											<div class="input-group-addon">Adresse</div>
											<input name="primary_address_street" type="text" class="form-control" placeholder="Adresse">
										</div>
									</div>
								</div> <!-- row -->
								<div class="row">
									<div class="form-group col-lg-6">
										<div class="input-group">
											<div class="input-group-addon">Code postale</div>
											<input name="primary_address_postalcode" type="text" class="form-control" placeholder="Code postale">
										</div>
									</div>
									<div class="form-group col-lg-6">
										<div class="input-group">
											<div class="input-group-addon">Ville</div>
											<input name="primary_address_city" type="text" class="form-control" placeholder="Ville">
										</div>
									</div>
								</div> <!-- row -->
								<div class="row">
									<div class="form-group col-lg-6">
										<div class="input-group">
											<div class="input-group-addon">Portable</div>
											<input name="phone_mobile" type="text" class="form-control" placeholder="portable/natel">
										</div>
										<span class="help-block" id="error"></span>
									</div>
									<div class="form-group col-lg-6">
										<div class="input-group">
											<div class="input-group-addon">Télèphone</div>
											<input name="phone_work" type="text" class="form-control" placeholder="télèphone">
										</div>
										<span class="help-block" id="error"></span>
									</div>
								</div> <!-- row -->
								<div class="row">
									<div class="form-group col-lg-12">
										<div class="input-group">
											<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
											<input name="email1" type="text" class="form-control" placeholder="Email">
										</div>
										<span class="help-block" id="error"></span>
									</div>
									
								</div> <!-- row -->
								<div class="row"><div class="form-group col-lg-12"><h3>Inscriptions aux cours:</h3></div></div>
								<?php
										while($rowQuery = $resQuery->fetch_assoc()) {
											$nCol ++;
											
											if ($nCol == 1){
												$sHtml = "<div class=\"row\">";
											}
											$sHtml .= "<div class=\"form-group col-lg-6\">
														<div class=\"form-checkbox\">
															<input id=\"" . $rowQuery['id'] . "\" name=\"courses[]\" type=\"checkbox\"/ value=\"". $rowQuery['id'] . "\">
															<label for=\"".  $rowQuery['id'] . "\" ></label>" 
															. "<strong>" . $rowQuery['name'] 
															. " - " . convert_day_to_text2($rowQuery['day']) . "</strong>"
															. " de " . $rowQuery['scheduletime_start'] . " à " . $rowQuery['scheduletime_end']
															
													. "</div>
													</div>";
									
											if ($nCol > 1){
												$sHtml .= "</div> <!-- Row --><br\>";
												$nCol = 0;
											}
											echo $sHtml;
											$sHtml = "";
											
										}
									
									$conn->close();

								?>
							</div>
							<!-- Cpatcha -->
							<div class="row">
								<div class="form-group col-lg-12">
									<?php
									  // show captcha HTML using Securimage::getCaptchaHtml()
									  /*
									  require_once '../vendor/securimage/securimage.php';
									  $options = array();
									  $options['input_name']             = 'ct_captcha'; // change name of input element for form post
									  $options['disable_flash_fallback'] = false; // allow flash fallback
									  
									  
									  if (!empty($_SESSION['ctform']['captcha_error'])) {
										// error html to show in captcha output
										$options['error_html'] = $_SESSION['ctform']['captcha_error'];
									  }

									  echo "<div id='captcha_container_1'>\n";
									  echo Securimage::getCaptchaHtml($options);
									  echo "\n</div>\n";
									  */
									?>
								</div>
							</div>
							
							<!-- SEND -->
							<div class="form-footer">
								 <button type="submit" class="button big">
								 <span class="glyphicon glyphicon-log-in"></span> enregistre-moi !
								 </button>
							</div>
						   </form>
						   <?php  else : ?>
								Désolée actuellment il n'y pas des cours ouvert pour inscriptions
							
							<?php endif; ?>	 
						   
					</div> <!-- inner -->
				</section>
			</div> <!-- .inner -->
		</div> <!-- Main -->
		<!-- Menu / Sidebar -->
		<?php include_once("sidebar.php"); ?>
	</div> <!-- Wrapper total-->
	<?php include_once("scripts.php"); ?>
	<script src="vendor/jquery1.11.2/jquery.validate.min.js"></script>
	<script src="assets/js/register.js"></script>
	</body>
</html>
