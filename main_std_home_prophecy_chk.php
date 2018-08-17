<?php require 'main_std_header.php';?>

<?php 
        if (!$_SESSION["session_username"])
        {
            Header("Location: index.php");
        }
        else
        {
?>

<?php require 'connect.php';?>

<?php 
    
    $id = $_SESSION["session_id"];
    $want = $_POST["want"];
    $basic = $_POST["basic"];
    $income = $_POST["income"];
    $like_supject = $_POST["like_supject"];
    $ma = $_POST["ma"]; //คณิตศาสตร์
    $sc = $_POST["sc"]; //วิทยาศาสตร์
    $en = $_POST["en"]; //ภาษาอังกฤษ
    $th = $_POST["th"]; //ภาษาไทย
    $pe = $_POST["pe"]; //พละศึกษา
    $ch = $_POST["ch"]; //จีน
    $so = $_POST["so"]; //สังคมศึกษา
    $ca = $_POST["ca"]; //การงานอาชีพ

    $ma2 = $_POST["ma2"]; //คณิตศาสตร์2
    $so2 = $_POST["so2"]; //สังคมศึกษา2

    // เงื่อนไขที่ 1
    if($so > 3.25 && $sc > 3.75 && $ma > 2.75 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 5 เกรดเฉลี่ยอยู่ระหว่าง 3.51-4.00 มีความเป็นไปได้ 100%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '0';
        $level4 = '0';
        $level5 = '100';
    }
    // เงื่อนไขที่ 2
    else if($so > 3.25 && $sc > 3.75 && $ma <= 2.75 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 4 เกรดเฉลี่ยอยู่ระหว่าง 3.01-3.50 มีความเป็นไปได้ 100%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '0';
        $level4 = '100';
        $level5 = '0';
    }
    // เงื่อนไขที่ 3
    else if($so > 3.25 && $sc <= 3.75 && $ca > 2.25 && $ma > 2.75 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 5 เกรดเฉลี่ยอยู่ระหว่าง 3.51-4.00 มีความเป็นไปได้ 50%" <br> และคุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 4 เกรดเฉลี่ยอยู่ระหว่าง 3.01-3.50 มีความเป็นไปได้ 50%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '0';
        $level4 = '50';
        $level5 = '50';
    }
    // เงื่อนไขที่ 4
    else if($so > 3.25 && $sc <= 3.75 && $ca > 2.25 && $ma <= 2.75 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 5 เกรดเฉลี่ยอยู่ระหว่าง 3.51-4.00 มีความเป็นไปได้ 100%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '0';
        $level4 = '0';
        $level5 = '100';
    }
    // เงื่อนไขที่ 5
    else if($so > 3.25 && $sc <= 3.75 && $ca <= 2.25 && $so2 > 1.5 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 4 เกรดเฉลี่ยอยู่ระหว่าง 3.01-3.50 มีความเป็นไปได้ 80% <br> และ คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 3 เกรดเฉลี่ยอยู่ระหว่าง 2.51-3.00 มีความเป็นไปได้ 20%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '20';
        $level4 = '80';
        $level5 = '0';
    }
    // เงื่อนไขที่ 6
    else if($so > 3.25 && $sc <= 3.75 && $ca <= 2.25 && $so2 <= 1.5 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 3 เกรดเฉลี่ยอยู่ระหว่าง 2.51-3.00 มีความเป็นไปได้ 100%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '100';
        $level4 = '0';
        $level5 = '0';
    }
    // เงื่อนไขที่ 7
    else if($so <= 3.25 && $ca > 2.75 && $so2 > 1.5 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 4 เกรดเฉลี่ยอยู่ระหว่าง 3.01-3.50 มีความเป็นไปได้ 93% <br> และ คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 3 เกรดเฉลี่ยอยู่ระหว่าง 2.51-3.00 มีความเป็นไปได้ 7%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '7';
        $level4 = '93';
        $level5 = '0';
    }
    // เงื่อนไขที่ 8
    else if($so <= 3.25 && $ca > 2.75 && $so2 <= 1.5 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 3 เกรดเฉลี่ยอยู่ระหว่าง 2.51-3.00 มีความเป็นไปได้ 100%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '100';
        $level4 = '0';
        $level5 = '0';
    }
    // เงื่อนไขที่ 9
    else if($so <= 3.25 && $ca <= 2.75 && $ma > 1.75 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 4 เกรดเฉลี่ยอยู่ระหว่าง 2.01-3.50 มีความเป็นไปได้ 15% <br> และ คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 3 เกรดเฉลี่ยอยู่ระหว่าง 2.51-3.00 มีความเป็นไปได้ 85%';
        $level1 = '0';
        $level2 = '0';
        $level3 = '85';
        $level4 = '15';
        $level5 = '0';
    }
    // เงื่อนไขที่ 10
    else if($so <= 3.25 && $ca <= 2.75 && $ma <= 1.75 && $ma2 > 1.25 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 2 เกรดเฉลี่ยอยู่ระหว่าง 2.01-2.50 มีความเป็นไปได้ 100%';
        $level1 = '0';
        $level2 = '100';
        $level3 = '0';
        $level4 = '0';
        $level5 = '0';
    }
    // เงื่อนไขที่ 11
    else if($so <= 3.25 && $ca <= 2.75 && $ma <= 1.75 && $ma2 <= 1.25 )
    {
        $result = 'คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 3 เกรดเฉลี่ยอยู่ระหว่าง 2.51-3.00 มีความเป็นไปได้ 67% <br> และ คุณมีโอกาสที่จะเรียนต่อสายวิทย์-คณิต ใน level ที่ 2 เกรดเฉลี่ยอยู่ระหว่าง 2.01-2.50 มีความเป็นไปได้ 33%';
        $level1 = '0';
        $level2 = '33';
        $level3 = '67';
        $level4 = '0';
        $level5 = '0';
    }

    $sql = "insert into prophecy(id_student,want,basic,income,like_supject,ma_gpa,sc_gpa,en_gpa,th_gpa,pe_gpa,ch_gpa,so_gpa,ca_gpa,result,level1,level2,level3,level4,level5)values('$id','$want','$basic','$income','$like_supject','$ma','$sc','$en','$th','$pe','$ch','$so','$ca','$result','$level1','$level2','$level3','$level4','$level5')";

    // if ($con->query($sql) === TRUE) 
    // {
    //     $last_id = $con->insert_id;
    // }

    mysqli_query($con, $sql);
    $last_id = mysqli_insert_id($con);
?>

    <div class="content-wrapper">
        <section class="content">

        	<center><img  height="60" width="60" src="images/book.png"></center>
	        <center><font color="black"><h3>ผลการพยากรณ์</h3></font></center>
	        <br>

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="form-horizontal">
                    <center>
                        <h4>                        
                                <?php echo $result; ?><br>
                        </h4>
                    </center>
                    </div>
                
                <?php

                    $get_data = $con->query("SELECT * FROM prophecy WHERE id = '$last_id'");
                    
                    while($data = $get_data->fetch_assoc())
                    {
                        $result = array();
                        $result[] = $data;
                    }
                ?>

                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        
                <table class="table table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>Level 1</th>
                            <th>Level 2</th>
                            <th>Level 3</th>
                            <th>Level 4</th>
                            <th>Level 5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($result as $result_tb){
                                echo"<tr>";
                                    echo "<td>คะแนน</td>";
                                    echo "<td>".$result_tb['level1']."</td>";
                                    echo "<td>".$result_tb['level2']."</td>";
                                    echo "<td>".$result_tb['level3']."</td>";
                                    echo "<td>".$result_tb['level4']."</td>";
                                    echo "<td>".$result_tb['level5']."</td>";
                                    
                                echo"</tr>";
                            }
                        ?>
                    
                    </tbody>
                </table>

                <center><img  height="200" width="350" src="images/student_all.png"></center>

                </div>
            </div>
            
	        <div>
	        	<center>
                <a class="btn btn-success" href="main_std_home_prophecy.php"><span class="glyphicon glyphicon-share-alt"></span> กลับ</a>
	        	</center>
	        </div>

        </section>
    </div>



<?php require 'main_std_footer.php';?>

<?php } ?>