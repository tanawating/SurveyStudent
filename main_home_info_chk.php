<?php require 'connect.php';?>
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

        $id = $_SESSION["session_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $tel = $_POST["tel"];

        $sql = "UPDATE admin SET username='$username',password='$password',fname='$fname' , lname='$lname' , tel='$tel' WHERE id='$id'";
        $query = mysqli_query($con,$sql);

        echo '<script>swal("สำเร็จ!", "แก้ไขข้อมูลเรียบร้อย", "success");</script>';
        mysqli_close($con);
                     
?>

<script language="JavaScript">
        setTimeout(function(){location.href="main_home_info.php"} , 1500); 
</script>

    </body>
</html>
<?php } ?>


