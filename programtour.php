<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = 'programtour';
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
	
	<div class="row">
		<div class="col-xs-12 promotion-panel">
			<h2><span><img src="images/promotionicon.png" alt="promotionicon" width="17" height="19" style="margin-top: -10px;"></span> โปรโมชั่นที่น่าสนใจ</a></h2>
			<!-- Tour list-->
			<div class="tour-list">
			<?php for($i=0;$i<4;$i++){ ?>
				<div class="tour-box">
					<div class="tour-thumb">
						<img src="images/tripthumb.jpg" alt="tripthumb" width="259" height="199">
					</div>
					<div class="tour-code">BEST_MMR1_FD</div>
					<div class="tour-detail">
						<h3 class="tour-name">ทัวร์พม่า ย่างกุ้ง หงสาวดี สิเรียม พระธาตุอินทร์แขวน 3 วัน</h3>
						<p>ระยะเวลา : 3 วัน 2 คืน </p>
						<div class="clear"></div>
						<div class="lenght"><span>เดินทาง : ก.พ.-มี.ค. 58</span></div>
						<div class="clear"></div>
						<table class="airline-info">
							<tr>
								<td>สายการบิน</td>
								<td rowspan="2" class="airlinelogo">
									<img src="images/airline.jpg" alt="airline" width="61" height="34">
								</td>
							</tr>
							<tr>
								<td>Bangkok Airways (FD)</td>
							</tr>
						</table>
					</div>
					<div class="bottom-box">
						<table>
							<tr>
								<td rowspan="2">
									<a href="programtour-detail.php" class="more">ดูรายละเอียด</a>
								</td>
								<td class="unit">ราคาเริ่มต้น / ท่าน</td>
							</tr>
							<tr>
								<td class="price">14,900 บาท</td>
							</tr>
						</table>
					</div>
				</div>
			<?php } ?>
			</div>
			<!-- end Tour list-->
			<div class="bottom-button">
				<a href="#" style="float: right;">ดูทั้งหมด</a>
			</div>
			<div class="bottom-shadow">
				<img src="images/shadow.png" alt="shadow" style="width: 100%; height: auto;"/>
			</div>
		</div>
	</div>
	<div class="clear" style="height: 30px;"></div>
	<h2 class="center-title">โปรแกรมทัวร์ทั้งหมด</h2>
	<!-- search -->
	<div class="row">
		<div class="col-xs-12">
			<div class="search-bar">
				<div class="hold-center">
					<label>ค้นหา : </label>
					<select>
						<option>ราคา</option>
					</select>
					<select>
						<option>วันที่เดินทาง</option>
					</select>
					<select>
						<option>สายการบิน</option>
					</select>
					<input type="text" placeholder="ระบุคำค้น">
					<button><span class="icon-search"></span> ค้นหา</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end search -->
	<!-- main tourlist -->
	<div class="row">
		<div class="tour-list main-tourlist col-xs-12">
			<?php for($i=0;$i<12;$i++){ ?>
				<div class="tour-box">
					<div class="new-label">
						<img src="images/newlabel.png" alt="newlabel" width="60" height="52">
					</div>
					<div class="tour-thumb">
						<img src="images/tripthumb.jpg" alt="tripthumb" width="259" height="199">
					</div>
					<div class="tour-code">BEST_MMR1_FD</div>
					<div class="tour-detail">
						<h3 class="tour-name">ทัวร์พม่า ย่างกุ้ง หงสาวดี สิเรียม พระธาตุอินทร์แขวน 3 วัน</h3>
						<p>ระยะเวลา : 3 วัน 2 คืน </p>
						<div class="clear"></div>
						<div class="lenght"><span>เดินทาง : ก.พ.-มี.ค. 58</span></div>
						<div class="clear"></div>
						<table class="airline-info">
							<tr>
								<td>สายการบิน</td>
								<td rowspan="2" class="airlinelogo">
									<img src="images/airline.jpg" alt="airline" width="61" height="34">
								</td>
							</tr>
							<tr>
								<td>Bangkok Airways (FD)</td>
							</tr>
						</table>
					</div>
					<div class="bottom-box">
						<table>
							<tr>
								<td rowspan="2">
									<a href="programtour-detail.php" class="more">ดูรายละเอียด</a>
								</td>
								<td class="unit">ราคาเริ่มต้น / ท่าน</td>
							</tr>
							<tr>
								<td class="price">14,900 บาท</td>
							</tr>
						</table>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<!-- end main tourlist -->
	
</div>
</section>
<?php include('inc_footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		var boxC = 0;
		$(".main-tourlist .tour-box").each(function(){
			boxC++;
			if(boxC < 4){
				$(this).find(".new-label").css({
					'display':'block'
				});
			}
		})
	})
</script>
</body>
</html>