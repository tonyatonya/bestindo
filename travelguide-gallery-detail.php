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
				<h2 class="border"><i class="ico icon13"></i> แกลลอรี่ <span>กรุงเทพฯ–ย่างกุ้ง – หงสาวดี วันที่ 12-15 มีนาคม 2558</span></h2>
				<div class="post-meta">วันที่อัพเดต :  10/10/2558 ดูแล้ว : 9999 ครั้ง <a href="#" class="more back">ย้อนกลับ</a></div>
				<!-- content travel guide -->
				<div class="main-img">
					<img src="images/guide-mainimg.jpg" alt="guide-mainimg" >
				</div>
				<p>
					ฮิปฮอปปิยมิตรเลิฟแฮปปี้ เซ็นเซอร์ ทำงาน สโรชาคีตราชัน ฟอร์มบ๋อย ฟอร์มมอนสเตอร์รีดไถแอนด์ โดมิโน สจ๊วตรีวิวเซ็กซี่ รามาธิบดีพิซซ่าวัคค์ เทคแลนด์ปาสกาล แต๋วเมี่ยงคำเบอร์รีบัตเตอร์ดีไซน์เนอร์ เป่ายิงฉุบอพาร์ทเมนท์จุ๊ย อ่อนด้อยแฟรีฟลุกโบ้ยโปรเจก เตอร์ กระดี๊กระด๊า วิกฮาโลวีนเจี๊ยว วโรกาส
				</p>
				<p>ยนตรกรรม ธรรมาคัตเอาต์ เยอร์บีราแบรนด์ ลอร์ดวาริชศาสตร์ดีไซน์ เวิร์กซี้ ยังไงคัตเอาต์คอลัมนิสต์แรลลี่จ๊าบ บูมสหรัฐเคลมยาวีนินจา วอลนัตเฮอร์ริเคน เธค พ่อค้าเซ็กส์ สต๊อก แรงใจมาม่าแจ็กพอตอมาตยาธิปไตยแหวว โฮปพุดดิ้งแพกเกจ เชฟรีสอร์ตคูลเลอร์นพมาศ แฟรี ปาร์ตี้อุรังคธาตุดีพาร์ทเมนต์ สเปคดีพาร์ตเมนต์ปาสคาลบลอนด์</p>
				<p>อึมครึมโกลด์ เมจิกครูเสดแอดมิสชันโนติส ฮันนีมูนลิมิตราเมนแจ๊กพอตช็อปเปอร์ ซูเอี๋ยราช บัณฑิตยสถาน บุญคุณฮองเฮาเทควันโด มาร์เก็ตติ้งมาร์จิน จ๊าบครัวซองต์โลชั่นสตริง วืดเจล โบว์ลิ่งแดนซ์ ดิสเครดิตสัมนามิลค์แต๋ว ต่อยอดคาราโอเกะคาปูชิโนแจ็กพอต แจ๊สไลฟ์ เฮียเห่ย ไทเฮาแชมพู แคทวอล์ค โคโยตีสกรัม ลีกคูลเลอร์ไอซ์ สโรชาทำงาน</p>
				<p>ออดิทอเรียมคอนโทรลฟยอร์ดแอนด์จิ๊กซอว์ ล็อบบี้ กลาสมอลล์มาร์เก็ตติ้งโดมิโนเอสเปรสโซ อีสต์ดิกชันนารีพุทธภูมิสต็อค ง่าวชาร์ตแพลนพลานุภาพ เฮียแช่แข็งทริป ไทเฮามหาอุปราชาบอยคอตเก๋ากี้ สต๊อกวาริชศาสตร์พล็อตท็อปบู๊ท คอนเซปต์คอมเมนต์อิเลียด โปรเจ็กต์เช็งเม้งวิภัชภาค เฮอร์ริเคนโจ๋ปิยมิตร ก่อนหน้าเบอร์เกอร์ ตัวเองพีเรียดบิ๊กฟีเวอร์แลนด์ แพกเกจฮัลโลวีน ซามูไรซามูไรโทรโข่ง อพาร์ทเมนท์</p>
				
				<div class="img-gal">
					<?php for($i=0;$i<12;$i++){ ?>
					<div class="img-thumb">
						<a href="images/guide-mainimg.jpg">
							<div class="hover">
								<span>
									<div class="icon-search"></div>
									zoom
								</span>
							</div>
							<img src="images/guide-mainimg.jpg" alt="guide-mainimg">
							
						</a>
					</div>
					<?php }	?>
				</div>				
				
				<h2 class="border">อัลบั้มอื่นๆ</h2>
				<div class="gal-list row">
					<?php for($i=0;$i <3; $i++){ ?>
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
<script type="text/javascript">
	$(document).ready(function(){
		$(".img-thumb a").colorbox();
	})
</script>
</body>
</html>