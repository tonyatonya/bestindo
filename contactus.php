<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = 'contactus';
	?>
</head>
<body>
<?php include('inc_topmenu.php'); ?>
<section class="main">
<div class="container">
	<div class="row">
		<div class="col-xs-12 main-slogan" style="text-align: center;">
			<img src="images/slogan.png" alt="slogan">
		</div>
	</div>
	<!--content-->
	<div class="row">
		<div class="col-xs-12">
			<div class="content-topbg"></div>
			<div class="content-body contact">
				<h2 class="border">CONTACT US</h2>
				<div class="row">
					<div class="col-xs-6">
						<table class="contact-info">
							<tr>
								<th colspan="2">
									BEST INDOCHINA TRAVEL & AGENCY CO.,LTD.
								</th>
							</tr>
							<tr>
								<td>ที่อยู่ :</td>
								<td>เลขที่ 24 ซอยจรัญสนิทวงศ์ 3 แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพฯ 10600</td>
							</tr>
							<tr>
								<td>เบอร์โทรศัพท์ :</td>
								<td>02-8682233</td>
							</tr>
							<tr>
								<td>แฟกซ์ :</td>
								<td>02-8682600</td>
							</tr>
							<tr>
								<td>เว็บไซต์ :</td>
								<td>www.bestindochina.com</td>
							</tr>
							<tr>
								<td>อีเมล์ :</td>
								<td>bestindochina@hotmail.com</td>
							</tr>
							<tr>
								<td>เวลาทำการ :</td>
								<td>จันทร์-ศุกร์ 09.00-17.30 น.<br>
									เสาร์ 09.00-15.00 น<br>
									วันอาทิตย์	 ปิดทำการ</td>
							</tr>
							<tr>
								<td>ติดต่อนอกเวลาทำการ :</td>
								<td>081-5814421 หรือ 081-4286871</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-6">
						<ul class="acc-list">
							<?php for($i=0;$i<5;$i++){ ?>
							<li>
								<div class="title">MANAGER OF BANGKOK</div>
								<div class="detail">
									<table>
										<tr>
											<th>Name</th>
											<th>TEL No.</th>
											<th>E-mail / Skype</th>
										</tr>
										<tr>
											<td>คุณ ปริวัตร์ เหลืองสอาดตา (เซน)</td>
											<td>089-9677220</td>
											<td>sales02@bestindochina.com </td>
										</tr>
										<tr>
											<td>คุณ ปริวัตร์ เหลืองสอาดตา (เซน)</td>
											<td>089-9677220</td>
											<td>sales02@bestindochina.com </td>
										</tr>
										<tr>
											<td>คุณ ปริวัตร์ เหลืองสอาดตา (เซน)</td>
											<td>089-9677220</td>
											<td>sales02@bestindochina.com </td>
										</tr>
										<tr>
											<td>คุณ ปริวัตร์ เหลืองสอาดตา (เซน)</td>
											<td>089-9677220</td>
											<td>sales02@bestindochina.com </td>
										</tr>
										<tr>
											<td>คุณ ปริวัตร์ เหลืองสอาดตา (เซน)</td>
											<td>089-9677220</td>
											<td>sales02@bestindochina.com </td>
										</tr>
									</table>
								</div>
							</li>
							<?php } ?>
							
						</ul>
						<!-- for normal user -->
						<div class="table" style="display: none;">
							<div class="cell">
								<p>สนใจจองโปรแกรมทัวร์ <br>
								สามารถติดต่อ ตัวแทนบริษัททัวร์ <br>
								ใกล้บ้านท่าน</p>
								<br>
								<a href="partner.php" class="more"><span class="icon-search"></span> ค้นหาบริษัททัวร์</a>
							</div>
						</div>
						<!-- end for normal user -->
					</div>
				</div>
				<div class="clear" style="height: 30px;"></div>
				<div class="row">
					<div class="col-xs-6">
						<h3>ส่งข้อความหาทีมงาน</h3>
						<table class="contact-tb">
							<tr>
								<td><label>ชื่อ :</label></td>
							</tr>
							<tr>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><label>โทรศัพท์ :</label></td>
							</tr>
							<tr>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><label>อีิเมล์ :</label></td>
							</tr>
							<tr>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><label>เรื่องที่ต้องการติดต่อ :</label></td>
							</tr>
							<tr>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><label>ข้อความ :</label></td>
							</tr>
							<tr>
								<td><textarea></textarea></td>
							</tr>
							<tr>
								<td style="text-align: right;">
									<input type="text" style="width: 150px;">
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="ส่งข้อความ">
								</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-6">
						<h3>แผนที่</h3>
						<div class="map-box">
							<div id="map-canvas"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end content-->
</div>
</section>
<?php include('inc_footer.php'); ?>
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<script type="text/javascript">
    function initialize() {
		  var myLatlng = new google.maps.LatLng(13.730672, 100.464619);
		  var mapOptions = {
		    zoom: 15,
		    center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		
		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Best indo China Travel'
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".acc-list li").click(function(){
			if($(this).hasClass("active")){
				$(this).find(".detail").slideUp();
				$(this).removeClass("active");
			}else{
				$(".acc-list li.active").find(".detail").slideUp();
				$(".acc-list li.active").removeClass("active");
				$(this).find(".detail").slideDown();
				$(this).addClass("active");
			}
			
		});
	})
</script>
</body>
</html>