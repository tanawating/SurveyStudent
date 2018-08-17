<!DOCTYPE html>
<html lang="en" >
    <head>

        <meta charset="UTF-8">
        <title>เข้าสู่ระบบ</title>
        <link rel="shortcut icon" href="images/icon.png">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" align="center">
                <h2><font color="#000000">เข้าสู่ระบบ</font></h2>
                <h4>สำหรับนักเรียนโรงเรียนผดุงนารี</h4>
                <h5>Username คือรหัสนักเรียน | Password คือเลขบัตรประชาชน</h5>
                <hr>
            </div>
            <div class="col-sm-3"></div>
        </div>
        
        <div class="form">
            <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/>
            </div>
            <div id="fullscreen_bg" class="fullscreen_bg"/>
                <div class="form-group">
                    <form class="form-signin" action="check_login.php" method="post" >
                         <div>
                          <select required="" name="type" class="form-control" id="sel1">
                            <option value="">เลือกประเภทผู้ใช้งาน</option>
                            <option value="1">ผู้ดูแลระบบ</option>
                            <option value="2">นักเรียน</option>
                          </select>
                        </div>
                        <br>
                        <input type="text" name="username" class="form-control input_data" placeholder="ชื่อผู้ใช้" required="" autofocus="">
                        <input type="password" name="password" class="form-control input_data" placeholder="รหัสผ่าน" required="">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign In
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>
