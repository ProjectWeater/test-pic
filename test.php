<?php
		//Set the Content Type
		header('Content-type: image/jpeg');
		// Create Image From Existing File
		$img = imagecreatefromjpeg('pic.jpg');
		// Allocate A Color For The Text
		$white = imagecolorallocate($img, 255, 255, 255);	  
		// Set Path to Font File
		$font_path = 'arial.ttf';	  
		// Set Text to Be Printed On Image
		$text = "Hello World";	  
		// Print Text On Image
		imagettftext($img, 25, 0, 75, 300, $white, $font_path, $text);  
		// Send Image to Browser
		imagejpeg($img);
		// Clear Memory
		imagedestroy($img);
		$quality = 100;
		imagejpeg($img, "demo.jpg", $quality);
?>