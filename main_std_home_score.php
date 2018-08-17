
<?php require 'main_std_header.php';?>

<?php 
        if (!$_SESSION["session_username"])
        {
            Header("Location: index.php");
        }
        else
        {
?>
    <div class="content-wrapper">
        <section class="content">

        	<center><img  height="60" width="60" src="images/pen.png"></center>
	        <center><font color="black"><h3>ให้ระดับความพึงพอใจต่อระบบพยากรณ์</h3></font></center>
	        <br>
	        <form method="post" action="main_std_home_score_chk.php">
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">
				        	<div class="form-group">
			                    <label for="name" class="col-sm-5 control-label">เลือกคะแนน :</label>
			                    <div class="col-sm-5">
			                        <label><input type="radio" value="1" name="point">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;</label>
			                        <label><input type="radio" value="2" name="point">&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;</label>
			                        <label><input type="radio" value="3" name="point">&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;</label>
			                        <label><input type="radio" value="4" name="point">&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</label>
			                        <label><input checked="checked"  type="radio" value="5" name="point">&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;</label>
			                    </div>
			                </div>
			                <hr>
			                <div class="form-group col-sm-12" align="left">
			                	<div class="col-sm-5"></div>
			                	<div class="col-sm-6">
			                    <p><b>หมายเหตุ</b></p>
			                    <p><b>1 หมายถึง น้อยที่สุด</b></p>
			                    <p><b>2 หมายถึง น้อย</b></p>
			                    <p><b>3 หมายถึง ปานกลาง</b></p>
			                    <p><b>4 หมายถึง มาก</b></p>
			                    <p><b>5 หมายถึง มากที่สุด</b></p>
			                	</div>
			                </div>
			             </div>
		            </div>
		        </div>

				<div>
					<center>
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> บันทึก</button>
					</center>
				</div>   

		    </form>

        </section>
    </div>

 <?php } ?>
<?php require 'main_std_footer.php';?>