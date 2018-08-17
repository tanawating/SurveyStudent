<?php session_start();
	require 'connect.php';
?>
<!DOCTYPE html>
<html>

	<head>
			<title>ระบบช่วยตัดสินใจในการศึกษา</title>
	        <meta charset="utf-8">
			<link rel="shortcut icon" href="images/icon.png">
	        <link rel="stylesheet" href="assets/dashboard/css/AdminLTE.min.css">
	        <link rel="stylesheet" href="assets/dashboard/css/skins/_all-skins.min.css">
	        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	</head>

	<body class="hold-transition skin-blue sidebar-mini">

	    <div class="wrapper">

	        <header class="main-header">
	            <a href="main_home.php" class="logo">
	                <span class="logo-mini"><b>A</b>LT</span>
	                <span class="logo-lg"><b>Admin</b></span>
	            </a>
	            <nav class="navbar navbar-static-top">
	            </nav>
	        </header>

	        <aside class="main-sidebar">
	            <section class="sidebar">
	                <div class="user-panel">
	                    <div class="pull-left image">
	                        <img src="images/user.png" class="img-circle" alt="User Image">
	                    </div>
	                    <div class="pull-left info">
	                        <p><br>
	                        	<?php 
									$id_home = $_SESSION["session_id"];
									$sql_home = "select * from admin where id='$id_home'";
									$query_home = mysqli_query($con, $sql_home);
									$data_home = mysqli_fetch_assoc($query_home);
								?>
	                            <?php
	                                echo $data_home['fname'].' '.$data_home['lname'];
	                            ?>
	                        </p>
	                    </div>
	                </div>
	                <ul class="sidebar-menu" data-widget="tree">
	                    <li>
	                        <a href="main_home.php">
	                            <i class="fa fa-home fa-1x"></i><span>หน้าหลัก</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_home_info.php">
	                            <i class="fa fa-id-card-o fa-1x"></i>
	                            <span>แก้ไขข้อมูลส่วนตัว</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_home_student.php">
	                            <i class="fa fa-users fa-1x"></i>
	                            <span>จัดการข้อมูลนักเรียน</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_home_check.php">
	                            <i class="fa fa-search"></i>
	                            <span>ตรวจสอบการพยากรณ์</span>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="main_home_satisfaction.php">
	                            <i class="fa fa-line-chart"></i>
	                            <span>ดูผลระดับความพึงพอใจ</span>
	                        </a>
	                    </li>
	                     <li>
	                        <a href="logout.php">
	                            <i class="fa fa-sign-out
	                            "></i>
	                            <span>ออกจากระบบ</span>
	                        </a>
	                    </li>
	                </ul>
	            </section>
	        </aside>

