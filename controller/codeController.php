<?php
$fp =fopen("C:/laragon/www/Sample/lib/websites.xml", "a");
fwrite($fp, '<site><name>test<name><url>C:/laragon/www<url/><site/>');
fclose($fp);
?>