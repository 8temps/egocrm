
<?php 
// this part should be saved as captcha.php
// best usage is to put this file with 5 random TTF font files in a folder named captcha
// for easy access and simplicity of use

	// Captcha script for GD > 2.0

/* 		Few notes about this script

	the width and height are measured in px so adjust according to your desire
	most variables in the variable section control the entire script so no editing below them should be needed
	the session variable $_SESSION['tt_pass'] is what holds the pass in the session can be changed on line 45

*/


/********************VARIABLES FOR THIS SCRIPT********************/
/*********SHOULD BE THE ONLY THING YOU HAVE TO CHANGE*********/

$pass_length = 5;					// passphrase length	
$make_upper = true;					// all upper case letters in image? true or false
$width = 200; $height = 60;			// image dimensions
$font_path = dirname(__FILE__);		// TTF font @ only change this if you relocate the TTF files!
$dark_font = true;					// if you want it easier to read, side effect bots can read it easier as well  true or false	
	
/********************END VARIABLES FOR SCRIPT********************/
/*********         EDIT BELOW THIS AT YOUR OWN RISK :)           *********/





	
// create a passphrase  ** it is case sensitive!!! **
	session_start();
	$passwd = '';
	$i = 0;
	
		while ($i < $pass_length) {
			$passwd .= chr(rand(97, 122));
			$i++;
		}
		
	if ($make_upper) {
		$passwd = strtoupper($passwd);
	}

// store the passphrase
	$_SESSION['tt_pass'] = $passwd;
	
// get available fonts
	$fonts = array();
	
		if ($handle = opendir($font_path)) {
			while (false !== ($file = readdir($handle))) {
				if (substr(strtolower($file), -4, 4) == '.ttf') {
					$fonts[] = $font_path.'/'.$file;
				}
			}
		}
		if (count($fonts) < 1) {
			die('No Fonts Found!!!');
		}

// image header
	header("Content-Type: image/jpeg");

// clear the cache
	header("Expires: Fri, 09 Jan 2008 05:00:00 GMT");
	header("Last-Modified: ".gmdate("D, d M Y H:i:s")."GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	
// create image
	$img = imagecreatetruecolor($width, $height);
	
// fill background with random shade of pastel
	$bg = imagecolorallocate($img, rand(210, 255), rand(210, 255), rand(210, 255));
	
// draw rectangle
	imagefilledrectangle($img, 0, 0, $width, $height, $bg);

// make the background jaggedy with differnet colored polygons
	$right = rand(10, 30);
	$left = 0;
	
		while ($left < $width) {
			$poly_points = array(
				$left, 0,
				$right, 0,
				rand($right-25, $right+25), $height,
				rand($left-15, $left+15), $height);
	
			$c = imagecolorallocate($img, rand(210, 255), rand(210, 255), rand(210, 255));
			imagefilledpolygon($img, $poly_points, 4, $c);
			
			$random_amount = rand(10, 30);
			$left += $random_amount;
			$right += $random_amount;
		}
		
// base range for lines
	$c_min = rand(150, 185);
	$c_max = rand(195, 280);
	
// draw vertical lines
	$left = 0;
		while ($left < $width) {
			$right = $left + rand(3, 7);
			$offset = rand(-3, 3);
			
			$line_points = array(
				$left, 0,
				$right, 0,
				$right + $offset, $height,
				$left + $offset, $height);
			
			$pc = imagecolorallocate($img, rand($c_min, $c_max),
										   rand($c_min, $c_max),
										   rand($c_min, $c_max));
			
			imagefilledpolygon($img, $line_points, 4, $pc);
			$left += rand(20, 60);
		}
	
// draw horisontal lines
	$top = 0;
		while ($top < $height) {
			$bottom = $top + rand(1, 4);
			$offset = rand(-6, 6);
			
			$line_points = array(
				0, $top,
				0, $bottom,
				$width, $bottom + $offset,
				$width, $top + $offset);
			$pc = imagecolorallocate($img, rand($c_min, $c_max),
										   rand($c_min, $c_max),
										   rand($c_min, $c_max));
			imagefilledpolygon($img, $line_points, 4, $pc);
			$top += rand(8, 15);
		}
		
// character spacing
	$spacing = $width/(strlen($passwd)+2);
	$x = $spacing;

// draw each character
	for ($i=0; $i < strlen($passwd); $i++) {
		$letter = $passwd[$i];
		$size = rand($height/3, $height/2);
		$rotation = rand(-30, 30);
		$y = rand($height * .90, $height - $size - 4);
	
	// random font	
		$font = $fonts[array_rand($fonts)];
	
	// color for letter
	if ($dark_font) {	
		$r = rand(0, 200); $g = rand(0, 200); $b = rand(0, 200);
	} else {
		$r = rand(100, 255); $g = rand(100, 255); $b = rand(100, 255);
	}
		
	// create letter and shadow colors
		$color = imagecolorallocate($img, $r, $g, $b);
		$shadow = imagecolorallocate($img, $r/3, $g/3, $b/3);
		
	// draw the shadow than letter
		imagettftext($img, $size, $rotation, $x, $y, $shadow, $font, $letter);
		imagettftext($img, $size, $rotation, $x-1, $y-3, $color, $font, $letter);
	
	// space the letter
		$x += rand($spacing, $spacing * 1.5);
	}
	
	// clear the memory used to make the captcha image
	imagejpeg($img);
	imagedestroy($img);
?>
