<? 

/* ***************************************** COOKIES ***************************/

// Crea una cookie para almacenar información de sesion a largo plazo
function start_cookie(){
        setcookie('id', "21",time()+3600);  
}

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
		"Jour",
		"Lundi", 
		"Mardi", 
		"Mercredi", 
		"Jeudi", 
		"Vendredi", 
		"Samedi",
		"Dimanche");
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
