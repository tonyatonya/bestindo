<section class="top-bar">
		<div class="container">
		<div class="row">
			<div class="col-xs-5">
				<div class="topcontact">
					<span>
						HOT LINE : 02-868-2233 Mon - Fri : 09:00 - 17:30 Sat : 09:00 - 15:00 
					</span>
				</div>
			</div>
			<div class="col-xs-7" style="position: relative;">
				<div class="top-right">
					<span>
						<ul class="topbtnlist">
							<li>TAT License No. 11 / 07437</li>
							<li><a href="#"><img src="images/fb.png" alt="fb" width="20" height="20" /></a></li>
							<li><a href="#"><img src="images/line.png" alt="line" width="21" height="20" /></a></li>
							<li><a href="#"><img src="images/instagram.png" alt="instagram" width="20" height="20" /></a></li>
							<li class="gab"><a href="#"><img src="images/youtube.png" alt="youtube" width="20" height="20" /></a></li>
							<li><a href="#" class="agentbutton topbtn"> <span class="icon-user"></span> Agent Login</a></li>
							<li><a href="#" class="registerbutton topbtn">Registor now</a></li>
						</ul>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<header>	
	<div class="container">
		<div class="row">
			<div class="col-xs-2 mainlogo">
				<a href="index.php">
					<img src="images/mainlogo.png" alt="mainlogo" height="80" />
					<h1>Best Indo China</h1>
				</a>
			</div>
			<div class="col-xs-10">
				<nav role="mainmenu" id="mainmenu">
					<ul>
						<li data-page="home"><a href="index.php">Home</a></li>
						<li data-page="programtour"><a href="programtour.php">Program Tour</a></li>
						<li data-page="packagetour"><a href="packagetour.php">Package Tour</a></li>
						<li data-page="travelguide"><a href="travelguide.php">Travel Guide</a></li>
						<li data-page="partner"><a href="partner.php">Our Partner</a></li>
						<li data-page="services"><a href="services.php">OUR SERVICE</a></li>
						<li data-page="aboutus"><a href="aboutus.php">About us</a></li>
						<li data-page="contactus"><a href="contactus.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<script type="text/javascript">
	$(document).ready(function(){
		// add Active for mainmenu current page
		var currPage = '<?php echo($curpage) ?>';
		$("#mainmenu li").each(function(){
			var pageName = $(this).attr('data-page');
			if(pageName == currPage){
				$(this).addClass("active");
			}
		})
	})
	
	// fix menu when scroll
	$(window).scroll(function (event) {
		var topbarH = $(".top-bar").height();
	    var scroll = $(window).scrollTop();
	    if(scroll > topbarH ){
		    $("header").css({
			    'position' : 'fixed',
			    'z-index' : '20',
			    'top':0,
			    'left' : 0
		    })
		    $(".main").css({
			    'margin-top' : '93px'
		    })
	    }else{
		    $("header").removeAttr('style');
		    $(".main").removeAttr('style');
	    }
});
</script>