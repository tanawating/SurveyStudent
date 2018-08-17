<?php session_start();?>
<?php require 'connect.php';?>
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

        $username = $_POST["username"];
        $password = $_POST["password"];
        $prefix = $_POST["Member_Title"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $sex = $_POST["std_sex"];
        $idcard = $str_idcard;
        $level = $_POST["std_level"];

        $chk = "SELECT * FROM `student` WHERE idcard = '$idcard'";
        $result = mysqli_query($con, $chk);
        $row = mysqli_num_rows($result);

        $chk_username = "SELECT * FROM `student` WHERE username = '$username'";
        $result_username = mysqli_query($con, $chk_username);
        $row_username = mysqli_num_rows($result_username);
        
        if($row > 0)
        {
                echo '<script>swal("ล้มเหลว!", "เลขบัตรประชาชนนี้มีในระบบแล้ว!", "error");</script>';
        }
        else if($row_username > 0) 
        {
                echo '<script>swal("ล้มเหลว!", "Username นี้มีในระบบแล้ว!", "error");</script>';
        }
        else
        {
                $sql = "insert into student(username,password,idcard,prefix,fname,lname,sex,level)values('$username','$password','$idcard','$prefix','$fname','$lname','$sex','$level')";
                $query = mysqli_query($con,$sql);

                echo '<script>swal("สำเร็จ!", "เพิ่มข้อมูลเรียบร้อย", "success");</script>';
                mysqli_close($con);
        }                                  
?>

<script language="JavaScript">
        setTimeout(function(){location.href="main_home_student.php"} , 1500); 
</script>

    </body>
</html>
<?php } ?>


