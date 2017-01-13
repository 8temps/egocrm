<?php
// Library tools for EGO Cirque
// Connection with DB and other tools for programming
// David Largo
// v.1 - 06.12.2016


/************************************************************************************
************************************************************************************
***************************** ACADEMY DATABASE **********************************
************************************************************************************
************************************************************************************/ 


 /**************************************************
  *  Lista todos los cursos de un academicid
  *  devuelve un array con los parametros generales del curso ordenado por día
 **************************************************/
//~ function academy_get_course_list ($aid){
    //~ $sQuery = "SELECT csrm_courses.id, csrm_courses.name, csrm_courses.description, csrm_courses.day, csrm_courses.status, csrm_courses.scheludetimestart, csrm_courses.scheludetimeend, csrm_courses.studentmax, csrm_courses.pricetype, csrm_courses.assigned_user_id 
                //~ FROM csrm_academicyear_csrm_courses_c
                //~ INNER JOIN csrm_courses 
                //~ ON csrm_academicyear_csrm_coursescsrm_courses_idb = csrm_courses.id
                //~ WHERE 
                //~ csrm_academicyear_csrm_courses_c.deleted = 0 
                //~ AND csrm_courses.deleted = 0 
                //~ AND csrm_academicyear_csrm_coursescsrm_academicyear_ida = \"". $aid ."\"
                //~ ORDER BY csrm_courses.day;";
    //~ $result = $GLOBALS["db"]->query($sQuery);            
    
    //~ return $result;
//~ } // end function

/**************************************************
 * Devuelve el total de cursos por un academic id
***************************************************/
function academy_get_cours_total($aid){
        $sQuery = "SELECT count(*) as totalcourses FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0 
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida =  \"" . $aid ."\"";
        
        $result = $GLOBALS["db"]->query($sQuery);
        $rowQuery = $GLOBALS["db"]->fetchByAssoc($result);
  
        return $rowQuery["totalcourses"];
                        
} // end function

/**************************************************
 * Devuelve el total de cursos por un academic id
***************************************************/
function academy_get_cours_total_activated($aid){
        $sQuery = "SELECT count(*) as totalcourses FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0
            AND ego_courses.status = \"4\" 
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida =  \"" . $aid ."\"";
        
        $result = $GLOBALS["db"]->query($sQuery);
        $rowQuery = $GLOBALS["db"]->fetchByAssoc($result);
  
        return $rowQuery["totalcourses"];
                        
} // end function

/**************************************************
 * Devuelve el total de cursos por un academic id
***************************************************/
function academy_get_cours_total_open($aid){
        $sQuery = "SELECT count(*) as totalcourses FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0 
            AND ego_courses.status = \"2\"
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida =  \"" . $aid ."\"";
        
        $result = $GLOBALS["db"]->query($sQuery);
        $rowQuery = $GLOBALS["db"]->fetchByAssoc($result);
  
        return $rowQuery["totalcourses"];
                        
} // end function

/**************************************************
 * Devuelve el total de cursos por un academic id
***************************************************/
function academy_get_cours_total_cancel($aid){
        $sQuery = "SELECT count(*) as totalcourses FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0
            AND ego_courses.status = \"0\"
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida =  \"" . $aid ."\"";
        
        $result = $GLOBALS["db"]->query($sQuery);
        $rowQuery = $GLOBALS["db"]->fetchByAssoc($result);
  
        return $rowQuery["totalcourses"];
                        
} // end function



/* *************************************************
 * Devuelve el total de alumnos INSCRITOS (contact) en un academic id
**************************************************/
function academy_get_student_total($aid){
        $sQuery = "SELECT count(*) as totalstudent FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            INNER JOIN ego_courses_contacts_c ON ego_courses.id = ego_courses_contacts_c.ego_courses_contactsego_courses_ida
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0 
            AND ego_courses_contacts_c.deleted = 0
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida =  \"" . $aid ."\"
            GROUP BY ego_courses_contacts_c.ego_courses_contactscontacts_idb";
        
        //echo $sQuery;            
        $result = $GLOBALS["db"]->query($sQuery);
        $rowQuery = $GLOBALS["db"]->fetchByAssoc($result);
  
        return $rowQuery["totalstudent"];
}

/**************************************************
 *     Devuelve el total de alumnos EN ESPERA (leads) en un academic id
**************************************************/
function academy_get_studentwaiting_total($aid){
        $sQuery = "SELECT count(*) as totalstudent FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            INNER JOIN ego_courses_leads_c ON ego_courses.id = ego_courses_leads_c.ego_courses_leadsego_courses_ida
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0 
            AND ego_courses_leads_c.deleted = 0
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida =   \"" . $aid ."\"";
        
        $resQuery = $GLOBALS["db"]->query($sQuery);
        $rowQuery = $GLOBALS["db"]->fetchByAssoc($resQuery);
  
        return $rowQuery["totalstudent"];
}


/**************************************************
 * Listado de todos los de estudiantes(id) por año 
 * no muestra los borrados
***************************************************/
function academy_get_student_list($academicid){
    $sQuery = "SELECT ego_courses_contacts_c.ego_courses_contactscontacts_idb as idcontact, DATE_FORMAT(ego_courses_contacts_c.date_modified, '%d/%m/%Y') AS dateinscription 
            FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            INNER JOIN ego_courses_contacts_c ON ego_courses.id = ego_courses_contacts_c.ego_courses_contactsego_courses_ida
            WHERE ego_academicyear_ego_courses_c.deleted = 0 AND ego_courses.deleted = 0 
            AND ego_courses_contacts_c.deleted = 0
            AND ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida = \"". $academicid . "\"
            GROUP BY idcontact";    
    
    $resQuery = $GLOBALS["db"]->query($sQuery);
    
    return $resQuery;
} // end function

/***************************************************
 * Listado de todos los de estudiantes(id) por año
 * Inclusive BORRADOS
 * ***************************************************/
function academy_get_student_list_all($academicid){
    $sQuery = "SELECT ego_courses_contacts_c.ego_courses_contactscontacts_idb as idcontact, 
            ego_courses_contacts_c.deleted AS deleted
            FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            INNER JOIN ego_courses_contacts_c ON ego_courses.id = ego_courses_contacts_c.ego_courses_contactsego_courses_ida
            WHERE 
            ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida = \"". $academicid . "\"
            AND ego_courses.deleted = 0
            GROUP BY idcontact";    
    // echo $sQuery;
    $resQuery = $GLOBALS["db"]->query($sQuery);
    
    return $resQuery;
} // end function

/***************************************************
 * Listado de todos los de estudiantes(id) por año
 * filtrado por el estado del curso 
 * Inclusive estudiantes BORRADOS
 * ***************************************************/
function academy_get_student_list_all_cours_status($academicid, $sStatus = 4){
    $sQuery = "SELECT ego_courses_contacts_c.ego_courses_contactscontacts_idb as idcontact, 
            ego_courses_contacts_c.deleted AS deleted
            FROM ego_academicyear_ego_courses_c 
            INNER JOIN ego_courses ON ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_courses_idb = ego_courses.id
            INNER JOIN ego_courses_contacts_c ON ego_courses.id = ego_courses_contacts_c.ego_courses_contactsego_courses_ida
            WHERE 
            ego_academicyear_ego_courses_c.ego_academicyear_ego_coursesego_academicyear_ida = \"". $academicid . "\"
            AND ego_courses.deleted = 0
            AND ego_courses.status  >= 4
            GROUP BY idcontact";    
     
    $resQuery = $GLOBALS["db"]->query($sQuery);
    
    return $resQuery;
} // end function

/**
 * Devuelve de todos los registros el último modificado
 */
function get_contact_course_last_date_modified($iContact, $iAcademy, $status = 0){
	$sDate = "00/00/0000";
	
	$sQuery = "SELECT DATE_FORMAT(MAX(ego_courses_contacts_c.date_modified), '%d/%m/%Y') AS dateinscription 
			FROM ego_courses_contacts_c
			INNER JOIN ego_academicyear_ego_courses_c ON ego_courses_contactsego_courses_ida = ego_academicyear_ego_coursesego_courses_idb
			WHERE
			ego_courses_contactscontacts_idb = \"". $iContact ."\"
			AND ego_academicyear_ego_coursesego_academicyear_ida = \"" . $iAcademy . "\"
			AND ego_courses_contacts_c.deleted = " . $status;
		
	$resQuery = $GLOBALS["db"]->query($sQuery);
	if ($resQuery->num_rows != 0) {
		$rowQuery = $GLOBALS["db"]->fetchByAssoc($resQuery);
		$sDate = $rowQuery['dateinscription'];
	}
	
	return $sDate;
} // end function


/** 
 * Devuelve la informacion de un Academicyear
 */
function get_academy($aid)
{
    return 0;
}
/*************************************************
    Devuelve la información de un curso
**************************************************/
function get_cours($sCoursId) {
    $sQuery = "SELECT * FROM csrm_courses
                    WHERE id = \"". $sCoursId ."\"";

        return 0;
} // end function



/************************************************************************************
************************************************************************************
***************************** STUDENT DATABASE **********************************
************************************************************************************
************************************************************************************/

/*************************************************************************************
    Devuelve el total de estudiantes por curso
***************************************************************************************/
function get_cours_student_count($sCours){
        $sTotal = 0;
        $sQuery = "SELECT COUNT(*) AS total FROM csrm_courses_contacts_c
                        INNER JOIN contacts ON contacts.id = csrm_courses_contactscontacts_idb
                        INNER JOIN csrm_courses ON csrm_courses.id = csrm_courses_contactscsrm_courses_ida
                        WHERE csrm_courses_contacts_c.deleted = 0  
                        AND csrm_courses_contactscsrm_courses_ida =\"" . $sCours . "\"";
        
        $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());
        $rowQuery = mysql_fetch_assoc($resQuery);
        $sTotal = $rowQuery['total'];
        mysql_free_result($resQuery);       
        
        return $sTotal;
} // end function

/*************************************************************************************
    Devuelve el total de preinscription de estudiantes por curso
***************************************************************************************/
function get_cours_preinscription_student_count($sCours){
        $sTotal = 0;
        $sQuery = "SELECT COUNT(*) AS total FROM pre_csrm_courses_contacts_c
                        INNER JOIN pre_contacts ON pre_contacts.id = csrm_courses_contactscontacts_idb
                        INNER JOIN csrm_courses ON csrm_courses.id = csrm_courses_contactscsrm_courses_ida
                        WHERE pre_csrm_courses_contacts_c.deleted = 0  
                        AND csrm_courses_contactscsrm_courses_ida =\"" . $sCours . "\"";
        
        $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());
        $rowQuery = mysql_fetch_assoc($resQuery);
        $sTotal = $rowQuery['total'];
        mysql_free_result($resQuery);       
        
        return $sTotal;
} // end function

/*************************************************************************************
    Devuelve una lista de preinscription  por curso
***************************************************************************************/
function get_preinscription_list_per_cours($sCoursId){
    $sQuery = "SELECT * FROM pre_csrm_courses_contacts_c 
                    INNER JOIN pre_contacts ON pre_contacts.id = csrm_courses_contactscontacts_idb 
                    INNER JOIN csrm_courses ON csrm_courses.id = csrm_courses_contactscsrm_courses_ida WHERE 
                    pre_csrm_courses_contacts_c.deleted = 0
                    AND csrm_courses_contactscsrm_courses_ida =\"" . $sCoursId ."\"
                    ORDER BY last_name";
    //echo $sQuery;
            
    $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());

    return $resQuery;
} // course_count

/*************************************************************************************
    Cuenta la cantidad de preinsciptioces en un año
***************************************************************************************/
function get_count_preinscription($sAcademicId){
    $sTotal = 0;    
    $sQuery = "SELECT count(*) AS totalstudent  FROM pre_contacts";
                    
                
    $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());
    $rowQuery = mysql_fetch_assoc($resQuery);
    $sTotal = $rowQuery['totalstudent'];
    mysql_free_result($resQuery);

    return $sTotal;
    
} // end function





/*************************************************************************************
    Cuenta la cantidad de estudiantes en un curso id
***************************************************************************************/
function get_count_student($sAcademicId){
    $sTotal = 0;    
    $sQuery = "SELECT count(*) AS totalstudent  FROM csrm_academicyear_csrm_courses_c
                    INNER JOIN csrm_courses_contacts_c ON csrm_courses_contactscsrm_courses_ida = csrm_academicyear_csrm_coursescsrm_courses_idb
                    WHERE
                    csrm_academicyear_csrm_courses_c.deleted = 0 AND
                    csrm_courses_contacts_c.deleted = 0 AND
                    csrm_academicyear_csrm_coursescsrm_academicyear_ida = \"". $sAcademicId . "\" 
                    GROUP BY csrm_courses_contacts_c.csrm_courses_contactscontacts_idb";
                
    $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());

    $sTotal = mysql_num_rows($resQuery);
    mysql_free_result($resQuery);

    return $sTotal;
    
} // end function

/*************************************************************************************
    Devuelve una lista de estudiantes por curso
***************************************************************************************/
function get_student_list_per_cours($sCoursId){
    $sQuery = "SELECT first_name, last_name, csrm_courses_contacts_c.csrm_courses_contactscontacts_idb as contacid, primary_address_city, phone_home, phone_mobile FROM csrm_courses_contacts_c
                    INNER JOIN contacts ON contacts.id = csrm_courses_contactscontacts_idb
                    INNER JOIN csrm_courses ON csrm_courses.id = csrm_courses_contactscsrm_courses_ida
                    WHERE csrm_courses_contacts_c.deleted = 0
                    AND csrm_courses_contactscsrm_courses_ida =\"" . $sCoursId ."\"
                    ORDER BY last_name";
    //echo $sQuery;         
    $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());

    return $resQuery;
} // course_count

/*************************************************************************************
    Devuelve un array query con la cantidad de cursos por id de estudiante
***************************************************************************************/
function get_contact_list_cours($sContactId, $sAcademicId){
    $total = 0;     
    $sQuery = "SELECT contacts.*, csrm_courses.*
                            FROM csrm_courses_contacts_c, contacts, csrm_academicyear_csrm_courses_c, csrm_courses
                            WHERE
                            csrm_academicyear_csrm_coursescsrm_courses_idb = csrm_courses_contactscsrm_courses_ida
                            AND csrm_courses_contactscsrm_courses_ida = csrm_courses.id
                            AND csrm_courses_contactscontacts_idb = contacts.id
                            AND csrm_courses_contacts_c.deleted = 0 
                            AND csrm_academicyear_csrm_coursescsrm_academicyear_ida = \"". $sAcademicId . "\"
                            AND contacts.id = \"". $sContactId . "\"";  
    $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());

    return $resQuery;
} // end function


/*************************************************************************************
    Devuelve el primer email encontrado de un contacto, por defecto devuelve un no-email
***************************************************************************************/
function get_contact_email($sContactId){
    $sEmail = "no-email";   
    $sQuery = "SELECT email_addresses.email_address AS emailcontact 
                    FROM email_addresses, email_addr_bean_rel,contacts
                    WHERE
                    email_addresses.id = email_addr_bean_rel.email_address_id
                    AND email_addr_bean_rel.bean_id = contacts.id
                    AND email_addr_bean_rel.deleted = 0
                    AND contacts.id = '" . $sContactId ."'";
    
    $result = $GLOBALS["db"]->query($sQuery);
    $rowQuery = $GLOBALS["db"]->fetchByAssoc($result);
    if (isset($rowQuery["emailcontact"]))
        $sEmail = $rowQuery["emailcontact"];
    
    return $sEmail;
} // end function

/*************************************************************************************
 * Busca un precio para un curso / estudiante 
 * Devuelve un array con el precio y el titulo del precio
***************************************************************************************/
function get_contact_cours_price($sContactId,$sAcademicId){
    $aPrecio['price'] = -1;
    $aPrecio['type'] = "H"; // Default: Heures 
    $sQuery = "SELECT name, price, period_type FROM 
				ego_coursesprice_contacts_c
				INNER JOIN ego_coursesprice ON ego_coursesprice.id = ego_coursesprice_contactsego_coursesprice_ida
				INNER JOIN ego_academicyear_ego_coursesprice_c ON ego_academicyear_ego_coursesprice_c.ego_academicyear_ego_coursespriceego_coursesprice_idb = ego_coursesprice.id
				WHERE
				ego_coursesprice_contacts_c.deleted = 0
				AND ego_academicyear_ego_coursespriceego_academicyear_ida = \"" . $sAcademicId . "\"
				AND ego_coursesprice_contacts_c.ego_coursesprice_contactscontacts_idb = \"". $sContactId . "\"";
	
    $result = $GLOBALS["db"]->query($sQuery);
    while ( $rowQuery = $GLOBALS["db"]->fetchByAssoc($result)) {
        $aPrecio['price'] = $rowQuery['price'];
        $aPrecio['type'] = $rowQuery['name'];
        $aPrecio['period_type'] = $rowQuery['period_type'];
    }   
    
    return $aPrecio;    
} // end function

/*************************************************************************************
 *   Devuelve un array con el precio segun los minutos y el titulo del precio
 *   Busca las tarifas asignadas al año
***************************************************************************************/
function get_contact_academy_rate($sMinutos,$sAcademicId){
    $aPrecio['price'] = -1;
    $aPrecio['type'] = "Rate/Tarif"; 
    
    $sQuery = "SELECT name, price, minute_range_min, minute_range_max, period_type 
            FROM ego_academicyear_ego_coursesrate_c
            INNER JOIN ego_coursesrate
                ON ego_academicyear_ego_coursesrate_c.ego_academicyear_ego_coursesrateego_coursesrate_idb = ego_coursesrate.id
            WHERE ego_coursesrate.deleted = 0
                AND ego_academicyear_ego_coursesrate_c.deleted = 0
                AND ego_academicyear_ego_coursesrate_c.ego_academicyear_ego_coursesrateego_academicyear_ida = '" . $sAcademicId . "'";
            
    $result = $GLOBALS["db"]->query($sQuery);
    
    while ( $rowQuery = $GLOBALS["db"]->fetchByAssoc($result)) {
		if ($sMinutos >= $rowQuery['minute_range_min'] && $sMinutos <= $rowQuery['minute_range_max']){
			$aPrecio['price'] = $rowQuery['price'];
			$aPrecio['type'] = $rowQuery['name'];
			$aPrecio['period_type'] = $rowQuery['period_type'];
        }
    }
       
    return $aPrecio;    
} // end function


/*************************************************************************************
    Devuelve TOTAL de Facturas por año acaemico
***************************************************************************************/
//~ function get_facture_total($sAcademicId){
    //~ // Listado total de estudiantes(id) por año
    //~ $sTotalFacture = 0; // Total de Factures
    
    //~ $resQuery = get_list_student($_SESSION['academicid']);
    //~ while ($rowQuery = mysql_fetch_assoc($resQuery)) {
            //~ // Tenemos la lista de todos los alumnos, hay que buscar la informacion de cada alumno en contact
            //~ // La cantidad de cursos y con ello sacamos los horarios
            //~ // Buscamos si tiene algún precio especial y si no aplicamos facturacion por horas. 
            //~ $sFacture = 0;
            //~ $sMinutos = 0;
            
            //~ $sQuery = "SELECT contacts.*, csrm_courses.*
                            //~ FROM csrm_courses_contacts_c, contacts, csrm_academicyear_csrm_courses_c, csrm_courses
                            //~ WHERE
                            //~ csrm_academicyear_csrm_coursescsrm_courses_idb = csrm_courses_contactscsrm_courses_ida
                            //~ AND csrm_courses_contactscsrm_courses_ida = csrm_courses.id
                            //~ AND csrm_courses_contactscontacts_idb = contacts.id
                            //~ AND csrm_courses_contacts_c.deleted = 0 
                            //~ AND csrm_academicyear_csrm_coursescsrm_academicyear_ida = \"". $sAcademicId . "\"
                            //~ AND contacts.id = \"". $rowQuery['idcontact'] . "\"";   
            //~ $resContact =  mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());
            //~ while ($rowContact = mysql_fetch_assoc($resContact)) {
                    //~ $sMinutos += calcular_tiempo_trasnc($rowContact['scheludetimestart'],$rowContact['scheludetimeend']);   

            //~ } // while
            //~ $aFacture = get_contact_cours_pricefix($rowQuery['idcontact'], $_SESSION['academicid']);            
            //~ if ($aFacture['price'] == -1)   // No tiene precio fijo
                //~ $aFacture = get_contact_cours_pricehours($sMinutos,$_SESSION['academicid']);
            //~ $sTotalFacture += $aFacture['price'];
    //~ } // while
            
    //~ return $sTotalFacture;
            
//~ } // end function
        
    
/************************************************************************************
************************************************************************************
***************************** ACADEMIC DATABASE **********************************
************************************************************************************
************************************************************************************/




//~ // Devuelve un array con el año academico y su id
//~ function get_academic($sId){
    //~ $sQuery = "SELECT id,name FROM csrm_academicyear 
                    //~ WHERE deleted=0 
                    //~ AND id = \"". $sId . "\"";
                        
    //~ $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());
    
    //~ $rowQuery = mysql_fetch_row($resQuery);
    //~ mysql_free_result($resQuery);

    //~ return $rowQuery;
//~ }

//~ // Devuelve un array con el año academico y su id
//~ function get_academic_list(){
    //~ $sQuery = "SELECT * FROM csrm_academicyear 
                    //~ WHERE deleted=0
                    //~ ORDER BY name";
                        
    //~ $resQuery = mysql_query($sQuery, $GLOBALS['conexion']) or die(mysql_error());

    //~ return $resQuery;
//~ }


/************************************************************************************
************************************************************************************
***************************** TOOLS **********************************
************************************************************************************
************************************************************************************/

/* ***************************************** Formatea un email para HTML ***************************/
function format_email($sEmail){
    if ($sEmail == "no-email")
        $sCadena = "<i class=\"fa fa-flag\"></i> NO EMAIL";
    else
        $sCadena = "<a href=\"mailto:". $sEmail . "\" target=\"_top\">". $sEmail . "</a>";
    
    return $sCadena;
} // End function


/* ***************************************** DATE TIME ***************************/
function calcular_tiempo_trasnc($hora1,$hora2){ 
    $separar[1]=explode(':',$hora1); 
    $separar[2]=explode(':',$hora2); 

    $total_minutos_trasncurridos[1] = ($separar[1][0]*60)+$separar[1][1]; 
    $total_minutos_trasncurridos[2] = ($separar[2][0]*60)+$separar[2][1]; 
    $total_minutos_trasncurridos = $total_minutos_trasncurridos[2]-$total_minutos_trasncurridos[1];


    return ($total_minutos_trasncurridos); 
} 

function convert_day_to_text($dia){
    $array_dia = array(
        "<div class='hidden'>00</div>Dimanche",
        "<div class='hidden'>01</div>Lundi", 
        "<div class='hidden'>02</div>Mardi", 
        "<div class='hidden'>03</div>Mercredi", 
        "<div class='hidden'>04</div>Jeudi", 
        "<div class='hidden'>05</div>Vendredi", 
        "<div class='hidden'>06</div>Samedi");
    $dia_texto = $array_dia[$dia];
    return ($dia_texto);
}

function convert_day_to_text2($dia){
    $array_dia = array(
        "Dimanche",
        "Lundi", 
        "Mardi", 
        "Mercredi", 
        "Jeudi", 
        "Vendredi", 
        "Samedi");
    $dia_texto = $array_dia[$dia];
    return ($dia_texto);
}


function hora ($hora){
        return (substr($hora, 0, 5));
}

/* ***************************************** VARIOS ***************************/
function print_barprogress ($participantes, $maximo) {
        $porcentaje = round(($participantes*100)/$maximo);
        $cadporcentaje = "";
        if ($porcentaje > 0 && $porcentaje <= 35)
            $cadporcentaje = "progress-bar-yellow";
        if ($porcentaje > 35 && $porcentaje <= 90) 
            $cadporcentaje = "progress-bar-green";
        if ($porcentaje > 90 && $porcentaje <= 100)  
            $cadporcentaje = "progress-bar-aqua"; 
        if ($porcentaje > 100)  
            $cadporcentaje = "progress-bar-red"; 
        
         
        $cadHtml = "<div class=\"progress\">"
            . "<div class=\"progress-bar ". $cadporcentaje ."\" role=\"progressbar\""
            . "aria-valuenow=\"". $participantes ."\""
            . "aria-valuemin=\"" . "0" ."\" aria-valuemax=\"" . $maximo . "\"" 
            . "style=\"width:" . ($participantes*100)/$maximo ."%\">"
            . "&nbsp;" . $porcentaje ."% élèves: " . $participantes . " de " . $maximo
            . "</div>";
            //echo $cadHtml;
            return ($cadHtml);
}

function convert_to_csv($input_array, $output_file_name, $delimiter)
{
    /** open raw memory as file, no need for temp files, be careful not to run out of memory thought */
    $f = fopen('php://memory', 'w');
    /** loop through array  */
    foreach ($input_array as $line) {
        /** default php csv handler **/
        fputcsv($f, $line, $delimiter);
    }
    /** rewrind the "file" with the csv lines **/
    fseek($f, 0);
    /** modify header to be downloadable csv file **/
    header('Content-Type: application/csv');
    header('Content-Disposition: attachement; filename="' . $output_file_name . '";');
    /** Send file to browser for download */
    fpassthru($f);
}



?>
