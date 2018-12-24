<?php

$con=mysql_connect("localhost","","");

if($con){

	mysql_select_db("anshul84_ghl");

}else{

	echo "Database not conneted"; die;

}

$baseUrl='http://www.gethealthierlife.com/';

?>