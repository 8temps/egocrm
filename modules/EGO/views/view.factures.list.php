<?php
	// Recogemos la information de AcademicYear
	$sQuery = "SELECT *
			FROM ego_academicyear
			WHERE id = \"" .$_GET['id'] . "\"";
	$result = $GLOBALS["db"]->query($sQuery);
    $rowAcademy = $GLOBALS["db"]->fetchByAssoc($result);
        // Ejecutamos la sentencia SQL para poner todos los detalles sobre la facturation
        //$sql = "SELECT id, name FROM accounts order by name";
        //$result = $GLOBALS["db"]->query($sql);
        //while ( $row = $GLOBALS["db"]->fetchByAssoc($result) ) {
        //    echo $row["name"] . " <br>";
        //}
        // Recogemos informacion Bean de Academicyear
?>
<link rel="stylesheet" href="modules/EGO/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="modules/EGO/css/dataTables.bootstrap.min.css"></style>
<!--  TODO: create buttons for export -->
<!-- <link rel="stylesheet" href="modules/EGO/buttons.bootstrap.min.css"></style> -->
<!-- <script type="text/javascript" src="modules/EGO/bootstrap.min.js"></script> -->

<script type="text/javascript" src="modules/EGO/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="modules/EGO/js/dataTables.bootstrap.min.js"></script>
<!--
<script type="text/javascript" src="modules/EGO/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="modules/EGO/buttons.bootstrap.min.js"></script>
 <script type="text/javascript" src="modules/EGO/jszip.min.js"></script>
<script type="text/javascript" src="modules/EGO/pdfmake.min.js"></script>
<script type="text/javascript" src="modules/EGO/vfs_fonts.js"></script>
<script type="text/javascript" src="modules/EGO/buttons.html5.min.js"></script>
<script type="text/javascript" src="modules/EGO/buttons.print.min.js"></script>
<script type="text/javascript" src="modules/EGO/buttons.colVis.min.js"></script>
-->


<h1><span class="glyphicon glyphicon-signal"></span> LISTE DES FACTURES pour des COURSES CONFIRMÉES: <?=$rowAcademy['name'];?></h1>
Exercise comptable du <?=date_format(new DateTime($rowAcademy['date_start']), 'd-m-Y');?> à <?=date_format(new DateTime($rowAcademy['date_end']), 'd-m-Y');?><br>

<table id="myTable" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>

            <th width="10%">Nom</th>
            <th width="10%">Prénom</th>
            <th width="20%">Adresse</th>
            <th width="5%">CP</th>
            <th width="5%">Localité</th>
            <th width="10%">Tel.</th>
            <th width="5%">Email</th>
            <th width="5%">Cours</th>
            <th width="7%">H</th>
            <th width="5%%">Tarif</th>
            <th width="5%">Periode</th>
            <th width="7%">Facture</th>
            <th width="5%">Status</th>
						<th width="5%">Date</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Listado total de estudiantes(id) por año INCLUIDO LOS BORRADOS
    $nTotalStudent = 0; // Total de Estudiantes
    $nTotalFacture = 0; // Total de Factures
    $iAcademy = $_GET["id"];

	$resQuery = academy_get_student_list_all_cours_status($iAcademy, 4);      // TODOS los estudiantes inclusive BORRADOS con ESTADO DE CURSO ACTIVO
    while ($rowQuery = $GLOBALS["db"]->fetchByAssoc($resQuery)) {   // ID de usuario
            // Tenemos el usuario
            // Comprobamos si el usuario no esta borrado
            // Comprobamos si tiene cursos ACTIVOS
            // Si no tiene cursos activos - Buscamos los cursos Borrados y cambiamos status
            //  Mostramos informacion
            $iContact = $rowQuery['idcontact'];
            $sCours = 0;
            $sFacture = 0;
            $sMinutos = 0;
            $nStatus = 0;

            // Informacion de Contacts
            $sQuery = "SELECT contacts.* FROM contacts WHERE contacts.id = \"" . $iContact . "\"";
            $resContact = $GLOBALS["db"]->query($sQuery);
            $rowContact = $GLOBALS["db"]->fetchByAssoc($resContact);
            $sNom = $rowContact['last_name'];
            $sPrenom = $rowContact['first_name'];
            $sAdresse = $rowContact['primary_address_street'];
            $sCP = $rowContact['primary_address_postalcode'];
            $sLocalite = $rowContact['primary_address_city'];
            $sTelephone = $rowContact['phone_mobile'] . " <br> " . $rowContact['phone_work'];
            $sEmail = get_contact_email($iContact);
            $sStatus = "<span class=\"label label-success pull-right\">ACTIVATED</span>";

            if ($rowContact['deleted']) {	// Estudiante borrado de algún curso
                $sStatus = "<span class=\"label label-danger pull-right\">DELETED</span>";
			} else {
				// Buscamos cursos ACTIVOS / CONFIRMADOS para academicyear
				$sQuery = "SELECT ego_courses.*
								FROM ego_courses_contacts_c, contacts, ego_academicyear_ego_courses_c, ego_courses
								WHERE
								ego_academicyear_ego_coursesego_courses_idb = ego_courses_contactsego_courses_ida
								AND ego_courses_contactsego_courses_ida = ego_courses.id
								AND ego_courses_contactscontacts_idb = contacts.id
								AND ego_courses_contacts_c.deleted = 0
								AND ego_courses.status = 4
								AND ego_academicyear_ego_coursesego_academicyear_ida = \"". $iAcademy . "\"
								AND contacts.id = \"". $iContact . "\"";
				//echo $sQuery . "<br>";
				$resCourse = $GLOBALS["db"]->query($sQuery);
				if ($resCourse->num_rows != 0) {	// Listado de cursos
					$nTotalStudent ++;
					$nStatus = 0;
					while ($rowCourse = $GLOBALS["db"]->fetchByAssoc($resCourse)) {
							// Horas total de curso
							$sCours ++;
							$sMinutos += calcular_tiempo_trasnc($rowCourse['scheduletime_start'],$rowCourse['scheduletime_end']);
					} // while
				} else {
					$sStatus = "<span class=\"label label-warning pull-right\">CANCELLED</span>";
					$nStatus = 1;
					// Buscamos cursos ACTIVOS con estudiantes BORRADOS para academicyear
					$sQuery = "SELECT contacts.*, ego_courses.*
								FROM ego_courses_contacts_c, contacts, ego_academicyear_ego_courses_c, ego_courses
								WHERE
								ego_academicyear_ego_coursesego_courses_idb = ego_courses_contactsego_courses_ida
								AND ego_courses_contactsego_courses_ida = ego_courses.id
								AND ego_courses_contactscontacts_idb = contacts.id
								AND ego_courses_contacts_c.deleted = 1
								AND ego_courses.status = 4
								AND ego_academicyear_ego_coursesego_academicyear_ida = \"". $iAcademy . "\"
								AND contacts.id = \"". $iContact . "\"";
					$resCourse = $GLOBALS["db"]->query($sQuery);
					while ($rowCourse = $GLOBALS["db"]->fetchByAssoc($resCourse)) {
							// Horas total de curso
							$sCours ++;
							$sMinutos += calcular_tiempo_trasnc($rowCourse['scheduletime_start'],$rowCourse['scheduletime_end']);
					} // while
				} // else if
				// Recogemos la última fecha de modificacion
				$sDateInscription = get_contact_course_last_date_modified($iContact, $iAcademy, $nStatus);

				// Buscamos Precio fijo para Contact
				$aFacture =  get_contact_cours_price($rowQuery['idcontact'], $iAcademy);
				if ($aFacture['price'] == -1) { // Facturacion por horarios
					$aFacture = get_contact_academy_rate($sMinutos,$iAcademy);
				} // if

				// TOTAL
				if ($nStatus == 0)
					$nTotalFacture += $aFacture['price'];

				// Crear informacion de las facturas
				// TODO: Si la fecha de modificacion de un estudiante por curso es diferente del año academico realiza una factura pour coste real.
				// TODO: Crear tantas facturas para una mejor visualización por periodo
				
				
				//~ $sFacture = "";
				// check 
				$sQtyFacture = "";
				if (!is_numeric($aFacture['period_type']) || $aFacture['period_type'] == 0)
					$aFacture['period_type'] = 12;
				for ($x=1; $x<=(12/$aFacture['period_type']); $x++){
					$sQtyFacture .= "FAC" . $x . ": " . number_format($aFacture['price'],"2",".","") . "<br/>"; 
				}
				
				switch ($aFacture['period_type']) {
					case '12':
						$aFacture['period_text'] = "annuel";
						break;
					case '6':
						$aFacture['period_text'] = "semestriels";
						break;
					case '3':
						$aFacture['period_text'] = "trimestriels";
						break;
					default:
						$aFacture['period_text'] = "mensuel";
						break;
				}
				
				//~ $sFacture =  "<td class=\"text-right\">" . number_format($aFacture['price'],"2",".","") . "</td>";
				$sFacture =  "<td class=\"text-right\">" . $sQtyFacture . "</td>";
				// Mostramos la información del estudiante
						$sTabla = "<tr>"
						. "<td>" . "<a href=\"index.php?module=Contacts&action=DetailView&record=" . $rowQuery['idcontact'] . "\" > " . $sNom . "</a>" . "</td>"
						. "<td>" . $sPrenom . "</td>"
						. "<td>" . $sAdresse. "</td>"
						. "<td>" . $sCP . "</td>"
						. "<td>" . $sLocalite . "</td>"
						. "<td>" . $sTelephone . "</td>"
						. "<td>" . format_email($sEmail) . "</td>"
						. "<td class=\"text-center\">" . $sCours. "</td>"
						. "<td class=\"text-center\">" . $sMinutos  . " min <span class='small'>(" . $sMinutos/60 . "h)</span>"  . "</td>"
						. "<td>" . $aFacture['type'] . "</td>"
						. "<td>" . $aFacture['period_text'] . "</td>"
						. $sFacture
						. "<td>" . $sStatus . "</td>"
						. "<td>" . $sDateInscription . " </td>"
						. "</tr>";
						echo $sTabla;
            } // else if
    } // while

?>
	</tbody>
</table>

<table id="Total" class="table table-striped table-bordered table-hover">
	<tr align="right">
		<td width="90%">TOTAL ÉTUDIANTS</td>
		<td width="10%"><?=$nTotalStudent;?></td>
	</tr>
	<tr align="right">
		<td width="90%">TOTAL FACTURES PAR PERIODE</td>
		<td width="10%"><?=number_format($nTotalFacture,"2",".","'");?></td>
	</tr>
	<tr align="right">
		<td width="90%">ESTIMATION FACTURES PAR ANNÉE</td>
		<td width="10%"><?=number_format(2*$nTotalFacture,"2",".","'");?></td>
	</tr>
</table>
<small>Date d'impression:<?=date_format(new DateTime(), 'd-m-Y H:m');?></small>
<script>
$(document).ready(function() {
    var table = $('#myTable').DataTable( {
        lengthChange: false,
				bPaginate: false,
    } );

} );
</script>
