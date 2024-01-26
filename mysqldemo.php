<?php
$db = new PDO('mysql:host=localhost;dbname=building','osama','some_pass');//requires 3 parameters
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
?>
