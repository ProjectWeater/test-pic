<?php

  //select the image on which you would like to write the text
 
 $sourcelocation = ('pic.jpg');

  
  
//create the image from existing image
  
$image = imagecreatefromjpeg($sourcelocation);

  
//destination file name where you want to store the new image

  $output = "images/text.jpg";

 
 
 //declaring the colors
  
$white = imagecolorallocate($image,255,255,255);
  
$black = imagecolorallocate($image,0,0,0);

 
 //font size of the text

  $font_size = 40;


 
 //rotation of the text
  
$rotation = 0;

  
//font style of the text.we need to give the location of.ttf file
 
 $font = "font\arial.ttf";

 
 //text you want to add to the image
 
 $text="Hello";
$text1 = imagettftext($image,$font_size,$rotation,25, 0, 75, 300,$white,$font,$text);

 
 imagejpeg($image,$output);


?>
