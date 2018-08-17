<?php require 'connect.php';?>
<?php session_start();?>
<?php 
        if (!$_SESSION["session_username"]){
            Header("Location: index.php");
        }else{
?>
<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        
<?PHP
        $id = $_REQUEST["id"];

        $sql = "DELETE FROM student  WHERE id ='$id'";
        $query = mysqli_query($con,$sql);

        echo '<script>swal("สำเร็จ!", "ลบข้อมูลเรียบร้อย", "success");</script>';
        mysqli_close($con);                               
?>

<script language="JavaScript">
        setTimeout(function(){location.href="main_home_student.php"} , 1500); 
</script>

    </body>
</html>
<?php } ?>


