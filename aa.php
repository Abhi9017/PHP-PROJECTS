<?php
if(isset($_POST['name'])){
require("fpdf/fpdf.php");
header("Content-type:image/png");
$font="C:/xampp/htdocs/ecertificate/Roboto-Bold.ttf";
$time=time();
$image=imagecreatefrompng("temp.PNG");
$color=imagecolorallocate($image,19,21,22,);
imagettftext($image,60,0,545,560,$color,$font,$_POST['name']);
imagettftext($image,45,0,600,685,$color,$font,$_POST['course']);

imagettftext($image,27,0,365,969,$color,$font,$_POST['mentor']);
imagettftext($image,20,0,750,780,$color,$font,$_POST['sdate']);

imagettftext($image,20,0,1050,780,$color,$font,$_POST['edate']);


imagepng($image,"download-certificate/$time.png");
imagedestroy($image);

	/*qr====*/
	
include("phpqrcode/qrlib.php");
$path='generated qr/';
$filename=$path.uniqid().".png";
if(isset($_POST['name'])){
$text=$_POST['name'].$_POST['course'].$_POST['mentor'].$_POST['sdate'].$_POST['edate'];

QRcode::png($text,$filename,'L',10,10);
echo "<center><img src='".$filename."'></center>";
}

/* qr ends*/

/*CE AND QR*/
$dest=$image;
$src=$filename;
imagecopymerge($dest,$src,10,10,0,0,500,200,75);
header('Content-type:image/png');
imagepng($image);
imagedestroy($dest);
imagedestroy($src);