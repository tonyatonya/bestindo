<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = 'packagetour';
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
	
	<?php include('inc_mainbanner.php'); ?>
	
	
	<h2 class="center-title">แพคเกจทัวร์ทั้งหมด</h2>
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
						<div class="option">
							<ul>
							<li class="option-plain"></li>
							<li class="option-hotel"></li>
							<li class="option-visa"></li>
							<li class="option-bus"></li>
							<li class="option-city"></li>
						</ul>
						</div>
					</div>
					<div class="bottom-box">
						<table>
							<tr>
								<td rowspan="2">
									<a href="packagetour-detail.php" class="more">ดูรายละเอียด</a>
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