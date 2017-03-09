<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ซันเวย์คลีนิกทัตกรรม</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='assets/css/fonts.css' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    ซันเวย์คลีนิกทัตกรรม
                </a>
            </div>

            <ul class="nav">
                <li <?php if($_GET['menu']=='profile'){ echo 'class="active" '; } ?>>
                    <a  href="admin_index.php?menu=profile">
                        <i class="pe-7s-graph"></i>
                        <p>ข้อมูลส่วนตัว</p>
                    </a>
                </li>
                <li  <?php if($_GET['menu']=='emp'){ echo 'class="active"'; } ?>>
                    <a href="admin_index.php?menu=emp">
                        <i class="pe-7s-user"></i>
                        <p>ข้อมูลพนักงาน</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='pos'){ echo 'class="active"'; } ?>>
                    <a href="admin_index.php?menu=pos">
                        <i class="pe-7s-user"></i>
                        <p>ข้อมูลตำแหน่ง</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='income'){ echo 'class="active"'; } ?>>
                    <a  href="admin_index.php?menu=income">
                        <i class="pe-7s-note2"></i>
                        <p>ข้อมูลรายรับรายจ่าย</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='bank'){ echo 'class="active"'; } ?>>
                    <a href="admin_index.php?menu=bank">
                        <i class="pe-7s-news-paper"></i>
                        <p>ข้อมูลธนาคาร</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='type_bank'){ echo 'class="active"'; } ?>>
                    <a href="admin_index.php?menu=type_bank">
                        <i class="pe-7s-science"></i>
                        <p>ข้อมูลประเภทบัญชี</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='quit'){ echo 'class="active"'; } ?>>
                    <a href="admin_index.php?menu=quit">
                        <i class="pe-7s-map-marker"></i>
                        <p>ข้อมูลพนักงานที่ลาออก</p>
                    </a>
                </li>
                <li <?php if($_GET['menu']=='use'){ echo 'class="active"'; } ?>>
                    <a href="admin_index.php?menu=use">
                        <i class="pe-7s-bell"></i>
                        <p>สิทธิ์การใช้งาน</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                </div>
<?php
if($_GET['menu']=='profile'){
    include('admin_show_profile.php');
}else if($_GET['menu']=='emp'){
    include('admin_show_emp.php');
}else if($_GET['menu']=='pos'){
    include('admin_show_pos.php');
}else if($_GET['menu']=='income'){
    include('admin_show_income.php');
}else if($_GET['menu']=='bank'){
    include('admin_show_bank.php');
}else if($_GET['menu']=='type_bank'){
    include('admin_show_type_bank.php');
}else if($_GET['menu']=='quit'){
    include('admin_show_quit.php');
}else if($_GET['menu']=='use'){
    include('admin_show_use.php');
}
?>
                        </div>
                    </div>


        <footer class="footer">
            <div class="container-fluid">
                <p  align="center">
                    &copy;  <a href="#"><script>document.write(new Date().getFullYear())</script></a>, m web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome <b>M</b>"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
