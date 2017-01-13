<?php include_once("session.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once("head.php"); ?>
		<link rel="stylesheet" href="assets/css/rate.css" type="text/css" />
	</head>
	<body>
	<div id="wrapper">	<!-- Wrapper total-->
		<div id="main"> <!-- Main -->
			<div class="inner">
				<header id="header">
					<span class="fa fa-th"></span>Circosphère: TARIFS
				</header>
				
				<section>
					<div class="row">
					<?php
							
						// Show coursrate with option public
						// Create connection
						// TODO: connection with API and not with Mysql
						$conn = new mysqli($db_config['db_host_name'], $db_config['db_user_name'], $db_config['db_password'], $db_config['db_name']);
						// Check connection
						if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); 	}

						$sHtml = "";
						$sQuery = "SELECT name, minute_range_min, minute_range_max, price, promotion_web, promotion_access, period_type
									FROM ego_coursesrate
									WHERE
									public_web = 1
									AND deleted = 0
									ORDER BY minute_range_min, minute_range_max";
						$resQuery = $conn->query($sQuery);
						
						if ($resQuery->num_rows > 0) :
							$sHtml .= '<ul>';
							while($rowQuery = $resQuery->fetch_assoc()) :
						?>
							<!-- PRICE ITEM -->
							<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
							<div class="panel price panel-white">
								<div class="panel-heading arrow_box text-center">
								<h3><?=$rowQuery['name'];?></h3>
								</div>
								<div class="panel-body text-center">
									<p class="lead" >
										<strong style="font-size:1.4em"><?=number_format($rowQuery['price'], 2);?></strong>
										<span sytle="font-size:0.4em">CHF/Semmestrel</span>
									</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-success"></i><?=$rowQuery['minute_range_min'];?> - <?=$rowQuery['minute_range_max'];?> minutes</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-danger" href="register.php">Inscription</a>
								</div>
							</div>
							</div>
							<!-- /PRICE ITEM -->

						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>
				<section id="conditions">
						<div class="row">
						<h2>Inscription et finance d'écolage</h2>
						<p>
						Les nouveaux élèves peuvent débuter les cours à tout moment dans l'année en fonctiondes places encore disponibles.
						Nous vous conseillons de consulter les périodes et tarifs pour vous informer des frais et des périodes d'enseignement.
						</p>
						<ul>
							<li>
							L’élève s’engage pour un année scolaire. L’année scolaire est divisée en deux semestres, l'un d'eux comprenant env. 18 leçons.
							</li>
							<li>
							Les frais d'incription seront facturés par BVR au début de chaque semestre,le payement devra être effectué dans les 30 jours.
							</li>
							<li>
							30 CHF sont ajoutés au frais d'inscription  pour les membres de l'association de circosphère.
							</li>
							<li>
							Les frais de cours ne seront pas remboursés en cas d'arrêt pendant le semestre en cours.
							</li>
							<li>
							L'inscription est valable pour le premier semestre et sera renouvelée automatiquement jusqu'à la fin de l'année.
							</li>
							<li>
							En cas de maladie prolongée ou d'accident moyennant un certificat médical, un arrangement <pro rata temporis> sera applicable.
							</li>
							<li>
							Chaque participant doit être au bénéfice d’une assurance accident personnelle.
							</li>
							<li>
							
							</li>
							<li>
							
							</li>
							<li>
							
							</li>
							<li>
							Les jeunes adultes qui souhaitent se perfectionner ou suivre une formation dans le domaine des arts du cirque sont priés de nous contacter.
							</li>
							<li>
							La direction se réserve le droit de supprimer les cours dont le nombre d’inscriptions est jugé insuffisant.
							</li>
						</ul>
						<h2>Sécurité, tenue et hygiène</h2>
						<ul>
							<li>
							Les élèves amènent aux cours des vêtements de gym ou un training ainsi que des chaussons de rythmique ou adapté à la discipline pratiquée.
							</li>
							<li>
							Les élèves aux cheveux longs doivent les attacher.
							</li>
							<li>
							Les chewing-gums sont interdits.
							</li>
							<li>
							Le juste-au-corps est obligatoire pour les disciplines aériennes.
							</li>
							<li>
							Le port de bijoux, boucles d'oreilles, barrettes dans le cheveux, montres, ceintures et autres colifichets est interdit.
							</li>
							<li>
							Pour des raisons d'hygiène, il est interdit de se restaurer dans la salle de cirque. Seules des boissons son autorisées, elles seront conservées avec les affaires personnelles de l'élève.
							</li>

						</ul>
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
