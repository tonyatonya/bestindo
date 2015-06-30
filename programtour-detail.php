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
	
	<!--content-->
	<div class="row">
		<div class="col-xs-12">
			<div class="content-topbg"></div>
			<div class="content-body">
				<h2 class="border">ทัวร์พม่า ย่างกุ้ง หงสาวดี สิเรียม พระธาตุอินทร์แขวน 3 วัน</h2>
				<div class="post-meta">วันที่อัพเดต :  10/10/2558 ดูแล้ว : 9999 ครั้ง</div>
				<div class="row">
					<div class="col-xs-8 hilightbox">
						<h3>ไฮไลท์</h3>
						<ul>
								<li>ชมโชว์การแสดงหุ่นกระบอกน้ำต้นตำรับแห่งแรกของโลก</li>
								<li>เดินทางปลอดภัย โดยสายการบินประจำชาติ ประเทศเวียดนาม</li>
								<li>ล่องเรืออ่าวฮาลอง พร้อมเสิร์ฟอาหารซีฟู๊ด สัมผัสมรดกโลกทางธรรมชาติ ท่ามกลางวิวทิวทัศน์ของอ่าวฮาลอง</li>
								<li>ลัดเลาะถนน 36 สาย ย่านโบราณแห่งกรุงฮานอย ช้อปปิ้งสินค้าพื้นเมืองมากมายให้เลือกสรร</li>
								<li>เยือนวัดหง๊อกเซิน ข้ามทะเลสาบคืนดาบอันสวยงาม พร้อมสัมผัสสะพานแสงอาทิตย์ เอกลักษณ์อันโด่งดังประจำกรุงฮานอย</li>
								<li>เที่ยวเมืองหลวงเก่าเยี่ยมชมวิหารวรรณกรรมเก่าแก่นับพันปีขอพรเทพเจ้าขงจื้ออันศักดิ์สิทธิ์ อีกทั้งชมสถาปัตยกรรมอันงดงามล้ำลึกด้วยศิลปะตะวันออก</li>
						</ul>
					</div>
					<div class="col-xs-4 optionbox">
						<div class="tour-code">BEST_MMR1_FD</div>
						<div class="clear"></div>
						<p class="tour-time">ระยะเวลา : 3 วัน 2 คืน </p>
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
						<div class="unit">ราคาเริ่มต้น / ท่าน</div>
						<div class="clear"></div>
						<div class="price">14,900 บาท</div>	
						<div class="clear"></div>
						<div class="button">
							<a href="#">ดาว์นโหลดโปรแกรมทัวร์ <span class="icon-file-word"></span></a>
							<a href="#">จอง</a>
						</div>
						<div class="button" style="display: none;">
							<a href="#">ดาว์นโหลดโปรแกรมทัวร์ <span class="icon-file-pdf"></span></a>
							<a href="#"><span class="icon-search"></span> ค้นหาบริษัททัวร์</a>
						</div>
					</div>
				</div>
				<h2 class="border">ตารางการเดินทาง</h2>
				<table class="tour-table">
					<tr>
						<th>วันที่เดินทางไป</th>
						<th>วันที่เดินทางกลับ</th>
						<th>ระยะเวลา</th>
						<th>รหัสทัวร์</th>
						<th>สายการบิน</th>
						<th>ราคาเริ่มต้นที่</th>
						<th>สถานะ</th>
					</tr>
					<tr>
						<td>20-03-2015</td>
						<td>23-03-2015</td>
						<td>3 วัน 2 คืน</td>
						<td>BEST_MMR1_FD</td>
						<td>FD</td>
						<td>14,900</td>
						<td class="status">
							<a class="stb">STANBY</a>
							<a href="#" class="reserve" style="display:none;">จองด่วน</a>
							<!-- normal User -->
							<a href="#" class="reserve" style="display:none;">ติดต่อบริษัททัวร์</a>	
							<!-- end normal User -->
							
						</td>
					</tr>
					<tr>
						<td>20-03-2015</td>
						<td>23-03-2015</td>
						<td>3 วัน 2 คืน</td>
						<td>BEST_MMR1_FD</td>
						<td>FD</td>
						<td>14,900</td>
						<td class="status">
							<a class="stb" style="display:none;">STANBY</a>
							<a class="reserve">จองด่วน</a>
							<!-- normal User -->
							<a href="#" class="reserve" style="display:none;">ติดต่อบริษัททัวร์</a>	
							<!-- end normal User -->
						</td>
					</tr>
					<tr>
						<td>20-03-2015</td>
						<td>23-03-2015</td>
						<td>3 วัน 2 คืน</td>
						<td>BEST_MMR1_FD</td>
						<td>FD</td>
						<td>14,900</td>
						<td class="status">
							<a class="stb" style="display:none;">STANBY</a>
							<a class="reserve">จองด่วน</a>
							<!-- normal User -->
							<a href="#" class="reserve" style="display:none;">ติดต่อบริษัททัวร์</a>	
							<!-- end normal User -->
						</td>
					</tr>
					<tr>
						<td>20-03-2015</td>
						<td>23-03-2015</td>
						<td>3 วัน 2 คืน</td>
						<td>BEST_MMR1_FD</td>
						<td>FD</td>
						<td>14,900</td>
						<td class="status">
							<a class="stb" style="display:none;">STANBY</a>
							<a href="#" class="reserve">จองด่วน</a>
							<!-- normal User -->
							<a href="#" class="reserve" style="display:none;">ติดต่อบริษัททัวร์</a>	
							<!-- end normal User -->
						</td>
					</tr>
					
				</table>
				<h2 class="border">รายละเอียดโปรแกรมทัวร์</h2>
				<h3>วันที่ 1 กรุงเทพฯ–ย่างกุ้ง – หงสาวดี – วัดไจ๊คะวาย –พระธาตุมุเตา - พระธาตุอินทร์แขวน</h3>
				<ul>
					<li>พระธาตุมุเตา   เป็นเจดีย์ที่สูงที่สุดในหงสาวดีสัญลักษณ์ยืนยันความเจริญรุ่งเรืองอีกทั้งยังเป็นเจดีย์คู่บ้านคู่เมืองของกรุงหงสาวดีมาช้านาน</li>
					<li>ที่พัก YO YOLAY HOTEL หรือเทียบเท่าระดับ 3 ***</li>
				</ul>
				<table class="detail-gal">
					<tr>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
					</tr>
				</table>
				<hr>
				<h3>วันที่ 1 กรุงเทพฯ–ย่างกุ้ง – หงสาวดี – วัดไจ๊คะวาย –พระธาตุมุเตา - พระธาตุอินทร์แขวน</h3>
				<ul>
					<li>พระธาตุมุเตา   เป็นเจดีย์ที่สูงที่สุดในหงสาวดีสัญลักษณ์ยืนยันความเจริญรุ่งเรืองอีกทั้งยังเป็นเจดีย์คู่บ้านคู่เมืองของกรุงหงสาวดีมาช้านาน</li>
					<li>ที่พัก YO YOLAY HOTEL หรือเทียบเท่าระดับ 3 ***</li>
				</ul>
				<table class="detail-gal">
					<tr>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
					</tr>
				</table>
				<hr>
				<h3>วันที่ 1 กรุงเทพฯ–ย่างกุ้ง – หงสาวดี – วัดไจ๊คะวาย –พระธาตุมุเตา - พระธาตุอินทร์แขวน</h3>
				<ul>
					<li>พระธาตุมุเตา   เป็นเจดีย์ที่สูงที่สุดในหงสาวดีสัญลักษณ์ยืนยันความเจริญรุ่งเรืองอีกทั้งยังเป็นเจดีย์คู่บ้านคู่เมืองของกรุงหงสาวดีมาช้านาน</li>
					<li>ที่พัก YO YOLAY HOTEL หรือเทียบเท่าระดับ 3 ***</li>
				</ul>
				<table class="detail-gal">
					<tr>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
						<td><img src="images/sampledetialimg.jpg" alt="sampledetialimg" width="250" height="160"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!--end content-->
	
	
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