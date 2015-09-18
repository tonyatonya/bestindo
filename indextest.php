<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = 'home';
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
	<div class="row">
		<div class="col-xs-12">
			<div class="grouptab">
				<div class="menutab">
					<ul>
						<li><a href="#"><span><img src="images/promotionicon.png" alt="promotionicon" width="17" height="19" style="margin-top: -10px;"></span> โปรโมชั่นที่น่าสนใจ</a></li>
						<li><a href="#">ข่าวสาร / กิจกรรม</a></li>
						<li><a href="#">รับทำ VISA พม่า</a></li>
					</ul>
				</div>
				<div class="contenttab">
					<div class="contenttab-content">
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
							<a href="#" class="bluebtn" style="float: right;">ดูทั้งหมด</a>
						</div>
					</div>
					<div class="contenttab-content">
						<!-- news content -->
						<div class="home-news news-list">
							<?php for($i=0;$i<4;$i++){ ?>
								<div class="news-box">
								<div class="news-img">
									<img src="images/aboutus_best01.jpg" alt="aboutus_best01">
								</div>
								<div class="detail">
									<h3>หัวข้อข่าว หัวข้อข่าว หัวข้อข่าว หัวข้อข่าว หัวข้อข่าว</h3>
									<p>
										เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้
									</p>
									<a class="more">อ่านต่อ</a>
								</div>
							</div>
							<?php } ?>
						</div>
						<!-- end news content -->
					</div>
					<div class="contenttab-content">
						<!-- visa -->
						<div class="home service-box">
							<h3>บริการรับยี่นวีซ่าพม่าทุกรูปแบบ</h3>
							<p class="center">
								อาทิ วีซ่า ท่องเที่ยว และวีซ่าธุรกิจ ทั้งวีซ่าคนไทยไปพม่า และวีซ่าคนพม่าไปประเทศอื่น
							</p>
							<div class="center"><img src="images/service/service01.png" alt="service01" width="633" height="223"></div>
					
							<div class="center-more">
								<a class="more" href="travelguide.php">ดูรายละเอียดเพิ่มเติมคลิกที่นี่</a>
							</div>
						</div>
						<!-- end visa -->
					</div>
				</div>
			</div>
			<div class="bottom-shadow">
				<img src="images/shadow.png" alt="shadow" style="width: 100%; height: auto;"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="anounce">
				<marquee scrolldelay="200"> เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ</marquee>
				<div class="label">
					<img src="images/anouce.png" alt="anouce" width="210" height="50">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="orange">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-box">
				<h2><img src="images/camera.jpg" alt="camera" width="32" height="26" style="margin-bottom: 5px;"> แกลอรี่</h2>
				<div class="home-gal">
				<?php for($i=0;$i<9;$i++){ ?>
					<a href="images/tripthumb.jpg" class="home-gallery">
						<img src="images/tripthumb.jpg" alt="tripthumb" width="259" height="199">
					</a>
				<?php }?>
				</div>
			</div>
			<div class="col-xs-4 col-box video">
				<h2><img src="images/films.jpg" alt="films" width="33" height="26" style="margin-bottom: 5px;"> วีดีโอล่าสุด</h2>
				<div style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; overflow: hidden; box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2)">
					<div class="videobox">
				<!-- youtube embed -->
				<iframe width="560" height="315" src="https://www.youtube.com/embed/lQQGsWEh6QY" frameborder="0" allowfullscreen></iframe>
				<!-- end youtube embed -->
				</div>
					<div class="titlename">
					ไกด์บุ๋มพาทัวร์พม่า กับรายการ Chill Out Travel Note
				</div>
					<div class="videomore">
					<a href="#" class="more">ดูทั้งหมดที่ <span class="entext">Youtube</span> <span class="icon-youtube"></span></a>
				</div>
				</div>
			</div>
			<div class="col-xs-4 col-box">
				<h2><img src="images/fbicon.jpg" alt="fbicon" width="27" height="26" style="margin-bottom: 5px;"> ติดตามเราได้ที่นี่</h2>
				<div class="fb-box">
					<!-- fb -->
					<div class="fb-page" data-href="https://www.facebook.com/pages/Best-Indochina-Myanmar/1628681380689614" data-width="360" data-height="360" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Best-Indochina-Myanmar/1628681380689614"><a href="https://www.facebook.com/pages/Best-Indochina-Myanmar/1628681380689614">Best Indochina Myanmar</a></blockquote></div></div>
					<!-- end fb -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="agent-group">
				<h2>ตัวแทนจำหน่าย</h2>
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
				<div class="agentmore">
					<a href="partner.php" class="more">ดูทั้งหมด</a>
				</div>
			</div>
			<img src="images/shadow.png" alt="shadow" style="width: 100%; height: auto; margin-top: -15px;">
		</div>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("a.home-gallery").colorbox();
		$(".grouptab .menutab li a").click(function(e){ 
			e.preventDefault();
			var getIndex = $(this).parent().index();
			var target = $(".contenttab .contenttab-content").eq(getIndex)
			var old = $(".contenttab .contenttab-content.active");
			if($(this).parent().hasClass("active") == false){
				old.animate({
					'opacity' : '0'
				},'fast').removeClass("active");
				$(".grouptab .menutab li.active").removeClass("active");
				$(".grouptab .menutab li").eq(getIndex).addClass("active");
				target.addClass("active");
				target.animate({
					'opacity' : '1'
				},'fast');
			}
		})
	})
	$(window).load(function(){
		$(".grouptab .menutab li a").eq(0).trigger('click');	
	})
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>