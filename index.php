<?php
$image_filepath = './pic.jpg';
saveImageWithText("Welcome to Test", $color, $image_filepath);
 
function saveImageWithText($text, $color, $source_file) { 
   
  $public_file_path = '.';
   
  // Copy and resample the imag
  list($width, $height) = getimagesize($source_file);
  $image_p = imagecreatetruecolor($width, $height);
  $image = imagecreatefromjpeg($source_file);
  imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
   
  // Prepare font size and colors
  $text_color = imagecolorallocate($image_p, 0, 0, 0);
  $bg_color = imagecolorallocate($image_p, 255, 255, 255);
  $font = $public_file_path . '/arial.ttf';
  $font_size = 12; 
   
  // Set the offset x and y for the text position
  $offset_x = 0;
  $offset_y = 20;
   
  // Get the size of the text area
  $dims = imagettfbbox($font_size, 0, $font, $text);
  $text_width = $dims[4] - $dims[6] + $offset_x;
  $text_height = $dims[3] - $dims[5] + $offset_y;
   
  // Add text background
  imagefilledrectangle($image_p, 0, 0, $text_width, $text_height, $bg_color);
   
  // Add text
  imagettftext($image_p, $font_size, 0, $offset_x, $offset_y, $text_color, $font, $text);
   
  // Save the picture
  imagejpeg($image_p, $public_file_path . '/output.jpg', 100); 
 
  // Clear
  imagedestroy($image); 
  imagedestroy($image_p); 
}; 