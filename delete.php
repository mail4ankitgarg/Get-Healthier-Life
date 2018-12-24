<?php



include('config.php');


$id = $_POST['id'];



mysql_query("delete from gallery where id='".$id."'");

?>