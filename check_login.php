<html>

    <head>
        <script src="assets/sweetalert/sweetalert.min.js"></script>
    </head>

    <body>

        <?php

            require 'connect.php';

            $username = $_POST["username"];
            $password = $_POST["password"];
            $type     = $_POST["type"];

            if ($type == 1)
            {
                $sql = "select * from admin where username='$username' and password='$password'";
            }
            else
            {
                $sql = "select * from student where username='$username' and password='$password'";
            }

            $result = mysqli_query($con, $sql);
            $row = mysqli_num_rows($result);
            
            if ($row > 0)  
            {
                session_start();
                $data = mysqli_fetch_object($result);
                $_SESSION["session_username"] = $data->username;
                $_SESSION["session_fullname"] = $data->fname." ".$data->lname;
                $_SESSION["session_id"] = $data->id;

                if ($data->username == "admin")
                {
                    header("refresh:0;main_home.php");
                }
                else 
                {
                    header("refresh:0;main_std_home.php");
                }
            } 
            else 
            {
                echo "<script>swal('คำเตือน', 'Username หรือ Password ไม่ถูกต้อง', 'error');</script>";
            }
        ?>

        <script language="JavaScript">
            setTimeout(function(){location.href="index.php"} , 1500); 
        </script>

    </body>

</html>