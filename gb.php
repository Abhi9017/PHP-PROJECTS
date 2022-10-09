<?php
  header('Content-type:image/jpeg');
  $email='abhilash@gmail.com';
  $fontsize=30;
  $wsize=strlen($email);
  $height=imagefontheight($fontsize);
  $width=imagefontwidth($wsize) * ($wsize+2);
  $image=imagecreate($width,$height);
  $bgcolor=imagecolorallocate($image,255,255,255);
  $fcolor=imagecolorallocate($image,0,0,0);
 $ii=imagestring($image,$fsize,0,0,$email,$fcolor); 
 echo $ii;
  imagejpeg($image);
  imagedestroy($image);
  
  
?>