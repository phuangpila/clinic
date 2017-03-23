<?php 
$host="127.0.0.1";
		$sql_user="root"; 
		$sql_pass=""; 
		$db_name="clinic"; 

		mysql_connect("$host", "$sql_user", "$sql_pass")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		mysql_query("SET NAMES UTF8");
 ?>