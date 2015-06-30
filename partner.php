<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = 'partner';
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
			<div class="content-body">
				<h2 class="border">OUR PARTNER</h2>
				<div class="post-meta">วันที่อัพเดต :  10/10/2558 ดูแล้ว : 9999 ครั้ง</div>
				<h3 style="border-bottom:1px solid #bbbdbf; padding-bottom: 5px;">กรุงเทพฯ - ปริมณฑล</h3>
				<!-- capital partner list -->
				<div class="agent-list">
					<?php for($i=0;$i<9;$i++){ ?>
						<div class="agent-child">
							<a href="#">
								<table>
								<tr>
									<td rowspan="4" class="logo">
										<img src="images/agentlogo.jpg" alt="agentlogo" width="80" height="80">
									</td>
									<td class="agent-name">บริษัท อิมเมจิ้นทัวร์ แอนด์ทราเวล เซอร์วิส จำกัด Imagine Tour & Travel Service Co.,Ltd.</td>
								</tr>
								<tr><td class="agent-license">ใบอนุญาตนำเที่ยวเลขที่ : 11 / 07437</td></tr>
								<tr><td class="agent-location">เขตบางกอกใหญ่ จังหวัด กรุงเทพมหานคร</td></tr>
								<tr><td class="agent-tel">Tel : 02-8682501-2</td></tr>
							</table>
							</a>
						</div>
					<?php } ?>
				</div>
				<!-- end capital partner list -->
				
				
				<h3 style="border-bottom:1px solid #bbbdbf; padding-bottom: 5px;">ภูมิภาค</h3>
				<!-- division partner list -->
				<div class="agent-list">
					<?php for($i=0;$i<9;$i++){ ?>
						<div class="agent-child">
							<a href="#">
								<table>
								<tr>
									<td rowspan="4" class="logo">
										<img src="images/agentlogo.jpg" alt="agentlogo" width="80" height="80">
									</td>
									<td class="agent-name">บริษัท อิมเมจิ้นทัวร์ แอนด์ทราเวล เซอร์วิส จำกัด Imagine Tour & Travel Service Co.,Ltd.</td>
								</tr>
								<tr><td class="agent-license">ใบอนุญาตนำเที่ยวเลขที่ : 11 / 07437</td></tr>
								<tr><td class="agent-location">เขตบางกอกใหญ่ จังหวัด กรุงเทพมหานคร</td></tr>
								<tr><td class="agent-tel">Tel : 02-8682501-2</td></tr>
							</table>
							</a>
						</div>
					<?php } ?>
				</div>
				<!-- end division partner list -->
				<!-- main tourlist -->
				<div class="row">
					<div class="tour-list main-tourlist col-xs-12">
						<h2>โปรแกรมทัวร์ที่เกี่ยวข้อง</h2>
						<?php for($i=0;$i<4;$i++){ ?>
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
		</div>
	</div>
	<!--end content-->
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