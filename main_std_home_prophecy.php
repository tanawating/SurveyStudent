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

        	<center><img  height="60" width="60" src="images/book.png"></center>
	        <center><font color="black"><h3>พยากรณ์</h3></font></center>
	        <br>
	        <form method="post" action="main_std_home_prophecy_chk.php" id="form_add_prophecy">
		        <div class="panel panel-primary">
	        		<div class="panel-body">
				        <div class="form-horizontal">

				        	<div class="row">
			                	<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
					                <br>
					                <div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">วิชาที่ถนัดเรียน  :</label>
					                    <div class="col-sm-3">
					                    	<select name="like_supject" id="like_supject" class="form-control">
					                    		<option value="">กรุณาเลือก</option>
					                    		<option value="ma">คณิตศาสตร์</option>
					                    		<option value="sc">วิทยาศาสตร์</option>
					                    		<option value="en">อังกฤษ</option>
					                    		<option value="th">ภาษาไทย </option>
					                    		<option value="so">สังคมศึกษา</option>
												<option value="pe">พละศึกษา</option>
												<option value="ch">จีน</option>
					                    		<option value="ca">การงานอาชีพ</option>
					                    	</select>
					                    </div>
					                </div>
				            	</div>
				            	<div class="col-sm-2"></div>
				            </div>

				        	<div class="row">
			                	<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
					                <br>
						        	<div class="form-group">
					                    <label for="name" class="col-sm-6 control-label">ระดับความต้องการที่อยากจะเรียนต่อ :</label>
					                    <div class="col-sm-5">
					                        <label><input type="radio" value="1" id="want" name="want">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="2" id="want" name="want">&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="3" id="want" name="want">&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="4" id="want" name="want">&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="5" checked="checked" id="want" name="want">&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                    </div>
					                </div>
					                <div class="form-group">
					                    <label for="name" class="col-sm-6 control-label">ความคิดเห็นด้านทักษะความรู้พื้นฐานของท่าน :</label>
					                    <div class="col-sm-5">
					                        <label><input type="radio" value="1" name="basic">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="2" name="basic">&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="3" name="basic">&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="4" name="basic">&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="5" checked="checked" name="basic">&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                    </div>
					                </div>
					                <div class="form-group">
					                    <label for="name" class="col-sm-6 control-label">ความคิดเห็นด้านรายได้ของครอบครัวของท่าน :</label>
					                    <div class="col-sm-5">
					                        <label><input type="radio" value="1" name="income">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="2" name="income">&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="3" name="income">&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="4" name="income">&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                        <label><input type="radio" value="5" checked="checked" name="income">&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;</label>
					                    </div>
					                </div>
			                		<div class="col-sm-2"></div>
				            	</div>
				            </div>

			                <div class="row">
				                <div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
				                	<br>
									<div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยคณิตศาสตร์  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="ma"  name="ma">
					                    </div>
				                	</div>
				                	<div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยคณิตศาสตร์ 2  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="ma2"  name="ma2">
					                    </div>
				                	</div>
								</div>
								<div class="col-sm-2"></div>
				            </div>

				            <div class="row">
								<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
				                	<br>
					                <div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยวิทยาศาสตร์  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="sc"  name="sc">
					                    </div>
					                </div>
				                </div>
								<div class="col-sm-2"></div>
							</div>

							<div class="row">
								<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
				                	<br>
									<div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยสังคมศึกษา  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="so"  name="so">
					                    </div>
					                </div>
									<div class="form-group">
						                <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยสังคมศึกษา 2 :</label>
						                <div class="col-sm-2">
						                    <input type="number" class="form-control" id="so2"  name="so2">
						                </div>
						            </div>
				            	</div>
								<div class="col-sm-2"></div>
							</div>

							<div class="row">
								<div class="col-sm-2"></div>
					                <div class="panel panel-default col-sm-8">
						                <br>
						                <div class="form-group">
						                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยภาษาอังกฤษ  :</label>
						                    <div class="col-sm-2">
						                        <input type="number" class="form-control" id="en"  name="en">
						                    </div>
						                </div>
						        	</div>
								<div class="col-sm-2"></div>
							</div>

							<div class="row">
								<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
					                <br>
					                <div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยภาษาไทย  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="th"  name="th">
					                    </div>
					                </div>
							    	<div class="col-sm-2"></div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
					                <br>
									<div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยพละศึกษา  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="pe"  name="pe">
					                    </div>
					                </div>
								</div>
								<div class="col-sm-2"></div>
							</div>

							<div class="row">
								<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
					                <br>
									<div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยจีน  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="ch"  name="ch">
					                    </div>
					                </div>
					            </div>
					        	<div class="col-sm-2"></div>
							</div>

							<div class="row">
								<div class="col-sm-2"></div>
				                <div class="panel panel-default col-sm-8">
					                <br>
					                <div class="form-group">
					                    <label for="name" class="col-sm-5 control-label">ผลการเรียนเฉลี่ยการงานอาชีพ  :</label>
					                    <div class="col-sm-2">
					                        <input type="number" class="form-control" id="ca"  name="ca">
					                    </div>
					                </div>
					        	</div>
					        	<div class="col-sm-2"></div>
							</div>
				            
			             </div>
		            </div>
		        </div>
		    </form>
	        <div>
	        	<center>
		        	<button type="button" onclick="save_prophecy(this)" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> บันทึก</button>
	        	</center>
	        </div>

        </section>
    </div>
	
	<script>

		function alert(text)
		{
			swal("คำเตือน", text , "error");
		}

		function save_prophecy(element)
		{
			var want = $('#want').val();
			var basic = $('#basic').val();
			var income = $('#income').val();
			var like_supject = $('#like_supject').val();
			var ma = $('#ma').val();
			var sc = $('#sc').val();
			var so = $('#so').val();
			var en = $('#en').val();
			var th = $('#th').val(); 
			var pe = $('#pe').val(); 
			var ch = $('#ch').val(); 
			var ca = $('#ca').val(); 

			var ma2 = $('#ma2').val(); 
			var so2 = $('#so2').val(); 

			if(want == '')
			{
				var text = 'กรุณาระบุ ระดับความต้องการที่อยากจะเรียนต่อ';
                alert(text); 
				
			}
			else if(basic == '')
			{
				var text = 'กรุณาระบุ ความคิดเห็นด้านทักษะความรู้พื้นฐานของท่าน ';
                alert(text); 
			}
			else if(income == '')
			{
				var text = 'กรุณาระบุ ความคิดเห็นด้านรายได้ของครอบครัวของท่าน';
                alert(text); 
			}
			else if(like_supject == '')
			{
				var text = 'กรุณาระบุ วิชาที่ถนัดเรียน';
                alert(text); 
			}
			else if(ma == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยคณิตศาสตร์';
                alert(text); 
			}
				else if(ma > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยคณิตศาสตร์ห้ามเกิน 4.00';
					alert(text); 
				}
			else if(sc == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยวิทยาศาสตร์';
                alert(text); 
			}
				else if(sc > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยวิทยาศาสตร์ห้ามเกิน 4.00';
					alert(text); 
				}
			else if(so == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยสังคมศึกษา';
                alert(text); 
			}
				else if(so > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยสังคมศึกษาห้ามเกิน 4.00';
					alert(text); 
				}
			else if(en == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยภาษาอังกฤษ';
                alert(text); 
			}
				else if(en > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยภาษาอังกฤษห้ามเกิน 4.00';
					alert(text); 
				}
			else if(th == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยภาษาไทย ';
                alert(text); 
			}
			else if(th > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยภาษาไทยห้ามเกิน 4.00';
					alert(text); 
				}
			else if(pe == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยพละศึกษา';
                alert(text); 
			}
			else if(pe > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยพละศึกษาห้ามเกิน 4.00';
					alert(text); 
				}
			else if(ch == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยจีน';
                alert(text); 
			}
				else if(ch > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยจีนห้ามเกิน 4.00';
					alert(text); 
				}
			else if(ca == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยการงานอาชีพ';
                alert(text); 
			}
				else if(ca > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยการงานอาชีพห้ามเกิน 4.00';
					alert(text); 
				}
			else if(ma2 == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยคณิตศาสตร์ 2';
                alert(text); 
			}
				else if(ma2 > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยคณิตศาสตร์ 2 ห้ามเกิน 4.00';
					alert(text); 
				}
			else if(so2 == '')
			{
				var text = 'กรุณากรอก ผลการเรียนเฉลี่ยสังคมศึกษา 2';
                alert(text); 
			}
				else if(so2 > 4)
				{
					var text = 'ผลการเรียนเฉลี่ยสังคมศึกษา 2 ห้ามเกิน 4.00';
					alert(text); 
				}
			else
			{
				$('#form_add_prophecy').submit();
			}
		}
	</script>

 <?php } ?>
<?php require 'main_std_footer.php';?>