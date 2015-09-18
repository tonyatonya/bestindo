<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 0); // Value 0 Not Show Error,1 Show Error 
ini_set('magic_quotes_gpc', 'Off');
ini_set('register_globals', 'Off');
ini_set('date.timezone', 'Asia/Bangkok');
?>
<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://www.bestindochina.com/agent.html">
	<?php
		include('include/inc_header.php');
                include 'include/db.php';
                include 'include/connect.php';
		$curpage = 'home';
	?>
</head>
<body>
<?php include('include/inc_topmenu.php'); ?>
<section class="main">
<div class="container">
	<div class="row">
		<div class="col-xs-12 main-slogan" style="text-align: center;">
			<img src="images/slogan.png" alt="slogan">
		</div>
	</div>
	<?php include('include/inc_mainbanner.php'); ?>
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
						<?php
                                                    //$qu = "select * from ( select * from tbprograme, tbairline where tbprograme.programe_airline = tbairline.airline_id && programe_promotion = 1 ) where order by rand() limit 0,4";
                                                    $qu = "select * from tbprograme, tbairline where tbprograme.programe_airline = tbairline.airline_id order by rand() limit 0,4  ";
                                                    $rs = mysql_query($qu);                                                    
                                                    
                                                    while ($ds = mysql_fetch_array($rs)){
                                                        ?>
							<div class="tour-box">
								<div class="tour-thumb">
									<img src="backend/upload/<?php echo $ds['programe_file'] ?>" alt="tripthumb" width="259" height="199">
								</div>
								<div class="tour-code">BEST_<?php echo $ds['programe_code'].'_'.$ds['airline_code']?></div>
								<div class="tour-detail">
									<h3 class="tour-name"><?php echo $ds['programe_name']?></h3>
									<p>ระยะเวลา : <?php echo $ds['programe_time']?> </p>
									<div class="clear"></div>
									<div class="lenght"><span>เดินทาง : <?php echo $ds['programe_month']?></span></div>
									<div class="clear"></div>
									<table class="airline-info">
										<tr>
											<td>สายการบิน</td>
											<td rowspan="2" class="airlinelogo">
                                                                                            <img src="backend/logo/<?php echo $ds['airline_file']?>" alt="airline" width="61" height="34">
											</td>
										</tr>
										<tr>
											<td><?php echo $ds['airline_name'].'&nbsp;&nbsp;'.$ds['airline_code'] ?></td>
										</tr>
									</table>
								</div>
								<div class="bottom-box">
									<table>
										<tr>
											<td rowspan="2">                                                                                            
												<a href="programtour-detail.php?adid=<?php echo $ds['programe_id']?>" class="more">ดูรายละเอียด</a>
											</td>
											<td class="unit">ราคาเริ่มต้น / ท่าน</td>
										</tr>
										<tr>
											<td class="price"><?php echo $ds['programe_price']?> บาท</td>
										</tr>
									</table>
								</div>
							</div>
                                                    <?php  } ?>
						</div>
						<!-- end Tour list-->
						<div class="bottom-button">
                                                    <a href="programtour.php" class="bluebtn" style="float: right;">ดูทั้งหมด</a>
						</div>
					</div>
					<div class="contenttab-content">
						<!-- news content -->
						<div class="home-news news-list">
							<?php
                                                        $ns = "select * from tbnews order by rand() limit 0,4";
                                                        $sn = mysql_query($ns);
                                                        while ($nss = mysql_fetch_array($sn) ){ ?>
								<div class="news-box">
								<div class="news-img">
                                                                    <img src="backend/upload/<?php echo $nss['news_file']?>" alt="aboutus_best01">
								</div>
								<div class="detail">
									<h3><?php echo $nss['news_header'] ?></h3>
									
										<?php echo $nss['news_describe_s']?>
									
                                                                        <a href="news.php?id=<?php echo $nss['news_id']?>" class="more">อ่านต่อ</a>
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
							<?php $vi = $db->findByPk('tbabout','about_id',15)->executeRow(); 							
								echo '<center>';
								echo $vi['about_describe'];
								echo '</center>';
								?>
							
							<div class="center"><img src="backend/upload/<?php echo $vi['about_file']?>" alt="service01" width="633" height="223"></div>
					
							<div class="center-more">
								<a class="more" href="travel.php?url=visa.php">ดูรายละเอียดเพิ่มเติมคลิกที่นี่</a>
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
                            <?php
                            $mq = $db->findall('tbstory')->execute();
                            ?>
				<marquee scrolldelay="200">
                                    <?php
                                        while ($mm = mysql_fetch_array($mq)){
                                            echo $mm['story_name'].',&nbsp;';
                                        }
                                    ?>
                                    <!--เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ  เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริตกราวนด์น็อค ควีน มาเฟียจูเนียร์ ป๊อกสันทนาการเก๋ากี้พล็อต , เอ็นเตอร์เทน แคมปัสยิวคัตเอาต์ เท็กซ์สปิริ-->
                                </marquee>
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
                            <h2><img src="images/camera.jpg" alt="camera" width="32" height="26" style="margin-bottom: 5px;"> แกลอรี่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="travelguide-gallery.php" class="more"><font size="4px" color="#224099">View all</a> </h2>
				<div class="home-gal">
				<?php 
                                $qu = "select * from tbgallery order by rand() limit 0,1  ";
                                $rs = mysql_query($qu);
                                $rss = mysql_fetch_array($rs);
                                if(!empty($rss['gall_pic_1'])){ ?>                                    
					<a href="backend/gallery/<?php echo $rss['gall_pic_1']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_1']?>" alt="tripthumb" width="259" height="199">
					</a>
                                <?php }
                                if(!empty($rss['gall_pic_2'])){
                                ?>
                                        <a href="backend/gallery/<?php echo $rss['gall_pic_2']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_2']?>" alt="tripthumb" width="259" height="199">
					</a>
                                <?php }
                                if(!empty($rss['gall_pic_3'])){
                                ?> 
                                        <a href="backend/gallery/<?php echo $rss['gall_pic_3']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_3']?>" alt="tripthumb" width="259" height="199">
					</a>
                                    <?php }
                                if(!empty($rss['gall_pic_4'])){
                                ?>
                                        <a href="backend/gallery/<?php echo $rss['gall_pic_4']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_4']?>" alt="tripthumb" width="259" height="199">
					</a>
                                    <?php }
                                if(!empty($rss['gall_pic_5'])){
                                ?>
                                    <a href="backend/gallery/<?php echo $rss['gall_pic_5']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_5']?>" alt="tripthumb" width="259" height="199">
					</a>
                                    <?php }
                                if(!empty($rss['gall_pic_6'])){
                                ?>
                                    <a href="backend/gallery/<?php echo $rss['gall_pic_6']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_6']?>" alt="tripthumb" width="259" height="199">
					</a>
                                    <?php }
                                if(!empty($rss['gall_pic_7'])){
                                ?>
                                    <a href="backend/gallery/<?php echo $rss['gall_pic_7']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_7']?>" alt="tripthumb" width="259" height="199">
					</a>
                                    <?php }
                                if(!empty($rss['gall_pic_8'])){
                                ?>
                                    <a href="backend/gallery/<?php echo $rss['gall_pic_8']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_8']?>" alt="tripthumb" width="259" height="199">
					</a>
                                    <?php }
                                if(!empty($rss['gall_pic_9'])){
                                ?>
                                    <a href="backend/gallery/<?php echo $rss['gall_pic_9']?>" class="home-gallery">
                                            <img src="backend/gallery/<?php echo $rss['gall_pic_9']?>" alt="tripthumb" width="259" height="199">
					</a>
				<?php }?>
				</div>
			</div>
			<div class="col-xs-4 col-box video">
				<h2><img src="images/films.jpg" alt="films" width="33" height="26" style="margin-bottom: 5px;"> วีดีโอล่าสุด</h2>
				<div style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; overflow: hidden; box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2)">
					<div class="videobox">
				<!-- youtube embed -->
                                <?php
                                $av = $db->findByPk('tbvdo','vdo_id',1)->executeRow();
                                ?>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $av['vdo_link']?>" frameborder="0" allowfullscreen></iframe>
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
					<?php 
					$rs = $db->findByTable('tbagency,tbamphur,tbprovince','tbagency.agency_province = tbprovince.province_id && tbagency.agency_umphur = tbamphur.amphur_id order by rand() limit 0,12')->execute();
					while ($rsb=  mysql_fetch_array($rs)){  ?>
						<div class="agent-child">
							<a href="<?php echo $rsb['agency_url']?>">
								<table>
								<tr>
									<td rowspan="4" class="logo">
									<?php
									if(!empty($rsb['agency_logo'])){
										echo '<img src="uploads/'.$rsb['agency_logo'].' alt="agentlogo" width="80" height="80">';
									}else{
										echo '<img src="images/agentlogo.jpg" alt="agentlogo" width="80" height="80">';
									}
									?>
										
									</td>
									<td class="agent-name"><?php echo $rsb['agency_name_th'].'&nbsp;'.$rsb['agency_name_eng']; ?></td>
								</tr>
								<tr><td class="agent-license">ใบอนุญาตนำเที่ยวเลขที่ : <?php echo $rsb['agency_license_num'];?></td></tr>
                                                                <tr><td class="agent-location"><?php echo $rsb['amphur_name'].'&nbsp;จังหวัด&nbsp;'.$rsb['province_name'];?></td></tr>
								<tr><td class="agent-tel">Tel : <?php echo $rsb['agency_tel']?></td></tr>
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
<?php include('include/inc_footer.php'); ?>
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