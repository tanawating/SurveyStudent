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
        $id = $_SESSION["session_id"];
        $point = $_POST["point"];

        $chk = "SELECT * FROM `score` WHERE id_student = '$id'";
        $result = mysqli_query($con, $chk);
        $row = mysqli_num_rows($result);
        
        if($row > 0)
        {
                echo '<script>swal("ล้มเหลว!", "ท่านประเมินเว็บไซต์ไปแล้ว", "error");</script>';
        }
        else
        {
                $sql = "insert into score(id_student,point)values('$id','$point')";
                $query = mysqli_query($con,$sql);

                echo '<script>swal("สำเร็จ!", "ประเมินเว็บไซต์เรียบร้อย", "success");</script>';
                mysqli_close($con);
        }                                  
?>

<script language="JavaScript">
        setTimeout(function(){location.href="main_std_home_score.php"} , 1500); 
</script>

    </body>
</html>
<?php } ?>


