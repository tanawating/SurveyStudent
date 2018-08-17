<?php require 'connect.php'?>
<?php session_start();?>
<?php 
        if (!$_SESSION["session_username"]){
            Header("Location: index.php");
        }else{
?>
<html>
    <head>
        <script src="assets/sweetalert/sweetalert.min.js"></script>
    </head>
    <body>
        
<?PHP
        $idcard = $_POST['idcard'];
        $str_idcard = str_replace("-","",$idcard);

        $id = $_SESSION["session_id"];
        $password = $_POST["password"];
        $prefix = $_POST["prefix"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $sex = $_POST["sex"];
        $idcard = $str_idcard;
        $level = $_POST["level"];

        $sql = "UPDATE student SET password='$password', prefix='$prefix' , fname='$fname' , lname='$lname' , sex='$sex' , idcard='$idcard' , level='$level' WHERE id='$id'";
        $query = mysqli_query($con,$sql);

        echo '<script>swal("สำเร็จ!", "แก้ไขข้อมูลเรียบร้อย", "success");</script>';
        mysqli_close($con);
                     
?>

<script language="JavaScript">
        setTimeout(function(){location.href="main_std_home_info.php"} , 1500); 
</script>

    </body>
</html>
<?php } ?>


