<?php 
	include('include/connect.php');
	error_reporting(0);
	session_start();
$user_name=stripslashes(htmlspecialchars(trim($_POST['user_name']), ENT_QUOTES));
$pass_word=stripslashes(htmlspecialchars(trim($_POST['pass_word']), ENT_QUOTES));
	if($user_name != "" && $pass_word != ""){
	$login_check = hash('sha1', $pass_word);

$strSql = "SELECT * FROM user WHERE username='".$user_name."' AND pass_word='".$login_check."' ";
	$sqlQuery = mysql_query($strSql);
	$rec = mysql_num_rows($sqlQuery);
		if ($rec > 0) {
			
			$row = mysql_fetch_array($sqlQuery);
			 $_SESSION["id"] = $row['id'];
			 $_SESSION["name"] = $row['name'];
			 $_SESSION["user_name"] = $row['user_name'];

		if($row['status']=='1'){
		    	header("refresh:0.5; admin_index.php" );
				exit();
		}else if($row['status']=='2'){
		    	header("refresh:0.5; doc_index.php" );
				exit();
		}else if($row['status']=='3'){
		    	header("refresh:0.5; emp_index.php" );
				exit();
		}else if($row['status']=='4'){
		    	header("refresh:0.5; user_index.php" );
				exit();
				}
		}else{
			imgLoading("Username หรือ Password อาจจะผิดกรุณา Login ใหม่อีกครั้ง...");
		header("refresh:2; login.php" );
		exit();
		}
}else{
	imgLoading("กรุณาใส่ Username หรือ Password ในการ Login...");
		header("refresh:2; login.php" );
		exit();
}


 ?>
				