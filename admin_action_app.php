<?php 
include('include/connect.php');
include('include/function.php');
if($_GET['ok']=='1'){
$newdata = array(
"status"=>"1",  
);
update("appoint",$newdata,"id = '".$_GET['app_id']."' ");
header("refresh:0.5; admin_index.php?menu=app" );
}else if($_GET['no']=='1'){
$newdata = array(
"status"=>"2",
);
update("appoint",$newdata,"id = '".$_GET['app_id']."' ");
header("refresh:0.5; admin_index.php?menu=app" );
}

 ?>