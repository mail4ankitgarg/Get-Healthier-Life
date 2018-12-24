<?php



include('config.php');


$id = $_POST['id'];



mysql_query("delete from appointment_list where id='".$id."'");

?>