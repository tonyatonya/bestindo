<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = 'travelguide';
		$guidepage = '';
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
		<?php include('inc_travelguidemenu.php'); ?>
		<div class="col-xs-9">
			<div class="content-topbg"></div>
			<div class="content-body">
				<h1>TRAVEL GUIDE</h1>
				<h2 class="border"><i class="ico icon13"></i> แกลลอรี่</h2>
				<!-- content travel guide -->
				<h2>LATEST ALBUM</h2>
				<div class="hotgal">
					<table style="width: 100%;">
						<tr>
							<td style="width: 295px;"><div class="main-thumb"><img src="images/galthumb.jpg" alt="galthumb"></div></td>
							<td>
								<ul class="meta">
									<li>กรุงเทพฯ–ย่างกุ้ง – หงสาวดี วันที่ 12-15 มีนาคม 2558</li>
									<li>วันที่อัพเดต :  10/10/2558</li>
									<li>ดูแล้ว : 9999 ครั้ง</li>
								</ul>
								<div class="clear"></div>
								<p>
									ฮิปฮอปปิยมิตรเลิฟแฮปปี้ เซ็นเซอร์ ทำงาน สโรชาคีตราชัน ฟอร์มบ๋อย ฟอร์มมอนสเตอร์รีดไถแอนด์ โดมิโน สจ๊วตรีวิวเซ็กซี่ รามาธิบดีพิซซ่าวัคค์ เทคแลนด์ปาสกาล แต๋วเมี่ยงคำเบอร์รีบัตเตอร์ดีไซน์เนอร์ เป่ายิงฉุบอพาร์ทเมนท์จุ๊ย อ่อนด้อยแฟรีฟลุกโบ้ยโปรเจก เตอร์ กระดี๊กระด๊า วิกฮาโลวีนเจี๊ยว วโรกาส
								</p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a href="#" class="more">ดูรายละเอียด</a>
							</td>
						</tr>
					</table>
				</div>
				
				<h2 class="border">อัลบั้มทั้งหมด</h2>
				<div class="gal-list row">
					<?php for($i=0;$i <9; $i++){ ?>
					<div class="col-xs-4">
						<div class="gal-child">
							<a href="travelguide-gallery-detail.php">
							<div class="hot-label"><img src="images/gal-hot.png" alt="gal-hot" width="121" height="33"></div>
							<div class="thumb">
								<img src="images/galthumb.jpg" alt="galthumb">
								<div class="mark-type photo"></div>
							</div>
							<div class="gal-detail">
								<h3>กรุงเทพฯ–ย่างกุ้ง – หงสาวดี วันที่ 12-15 มีนาคม 2558</h3>
								<ul class="meta">
								<li>วันที่อัพเดต :  10/10/2558</li>
								<li>ดูแล้ว : 9999 ครั้ง</li>
							</ul>
							</div>
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- end content travel guide -->
			</div>
		</div>
	</div>
	<!--end content-->
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>