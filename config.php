<?php
$db_user ="root";
$db_password ="";
$db_name ="registration";
$db =new PDO('mysql:host=localhost;dbname='. $db_name, $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>