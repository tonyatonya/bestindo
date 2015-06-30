<aside>
<div class="col-xs-3">
	<!-- travelguide menu-->
	<img src="images/travelguidemenu-header.png" alt="travelguidemenu-header" style="width:100%; height: auto;"/>
	<ul class="travelguide-menu">
		<li><a href="faq.php"><i class="faq ico icon1"></i> คำถามที่พบบ่อย</a></li>
		<li><a href="howto.php"><i class="faq ico icon2"></i> วิธีจองออนไลน์</a></li>
		<li><a href="payment.php"><i class="faq ico icon3"></i> ช่องทางชำระเงิน</a></li>
	</ul>
	<!-- end travel guide menu -->
	<!-- side package tour -->
<div class="promotion-sidepanel">
	<h2>
		<span><img src="images/promotionicon.png" alt="promotionicon" width="17" height="19" style="margin-top: -10px;"></span> โปรโมชั่นที่น่าสนใจ</a></h2>
	<!-- Tour list-->
	<div class="sidepanel-list">
	<?php for($i=0;$i<2;$i++){ ?>
		<div class="tour-box">
			<div class="tour-code">BEST_MMR1_FD</div>
			<table>
				<tr>
					<td>
						<div class="tour-thumb">
							<img src="images/tripthumb.jpg" alt="tripthumb" width="259" height="199">
						</div>	
					</td>
					<td>
						<h3 class="tour-name">ทัวร์พม่า ย่างกุ้ง หงสาวดี สิเรียม พระธาตุอินทร์แขวน 3 วัน</h3>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-top: 5px; padding-bottom: 5px; text-align: center;">
						<p>ระยะเวลา : 3 วัน 2 คืน</p>
						<div class="clear"></div>
						<div class="lenght"><span>เดินทาง : ก.พ.-มี.ค. 58</span></div>		
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table>
							<tr>
								<td class="unit">ราคาเริ่มต้น / ท่าน</td>
								<td class="price">14,900 บาท</td>
							</tr>
							<tr>
								<td class="airlinelogo" style="text-align: left; vertical-align: bottom;"><img src="images/airline.jpg" alt="airline" width="61" height="34"></td>
								<td style="text-align: right; vertical-align: bottom;"><a href="programtour-detail.php" class="more">ดูรายละเอียด</a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	<?php } ?>
	</div>
	<!-- end Tour list-->
	<div class="bottom-button">
		<a href="programtour.php" style="float: right;">ดูทั้งหมด</a>
	</div>
</div>
<!-- end side package tour -->

</div>
</aside>