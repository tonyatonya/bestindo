<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<?php
		include('inc_header.php');
		$curpage = '';
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
		<?php include('inc_faqsidemenu.php'); ?>
		<div class="col-xs-9">
			<div class="content-topbg"></div>
			<div class="content-body">
				<h2 class="border"><i class="faq ico icon1"></i> คำถามที่พบบ่อย</h2>
				<div class="post-meta">วันที่อัพเดต :  10/10/2558 ดูแล้ว : 9999 ครั้ง </div>
				<!-- content travel guide -->
				<ul class="faq-list acc-list">
				<?php for($i=0;$i<5;$i++){ ?>
				<li>
					<div class="title">
						<span class="icon-bubble"></span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam laoreet dolore 
					</div>
					<div class="detail">
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes 
						</p>
					</div>
				</li>
				<?php } ?>
				</ul>
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