<?php
session_start();
include_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Nilai Food Ordering System</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Nilai FOS is the food counter which has the facility of online and on call home delivery with a take away food counter as well. This is an easily reachable platform for ensuring a constant supply of our mouth-watering dishes of each restaurant to the customers." />
	<meta name="keywords" content="Best Catering Services, Order Food Online, Restaurant Home Delivery, Tandori Food Delivery, Chinese Food Patna"/>

<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsiveslides.css" />
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script src="js/responsiveslides.js"></script>
<script>
	$(function () {
	  $("#slidez").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		maxwidth: 960,
		namespace: "centered-btns"
	  });
	});
</script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->

					<?php include("header2.php"); ?>

<!-- / header -->
<!-- content -->
				<article id="content">
					<div class="slider_bg">
						<div class="slider">
							<ul class="items">
								<li>
									<img src="images/img1.jpg" alt="">
									<div class="banner">
										<strong>Delicious <span>Food</span></strong>
										<b>Special Dish</b>
										<p>
											<span>Some of the dishes on the menu<br>
											 Best platform for customer to choose any restaurant from this site</p>
									</div>
								<li>
									<img src="images/onlineorder.jpg" alt="">
									<div class="banner">
										<a href="menu.php?list=1&mid=3"><strong>Online<span>Order</span></strong></a>
										<b>Take Away/Home Delivery</b>
										<p>
											<span>Save your time <br>
											Order online. Dont need to spend so much of your
											quality time in waiting for the food. Just order it online and they will deliver at you home or you may take it away.</span>
										</p>
									</div>
								</li>
								<li>
									<img src="images/hygiene.jpg" alt="">
									<div class="banner">
									<a href="menu.php">	<strong>Food<span>Halal and Hygine</span></strong></a>
										<b>Our 1st Priority</b>
										<p>
											<span>Nilai FOS feature<br>
											Care of food Hygiene and Halal. Foods health is our special concern. The restaurant registered here is halal and hygine</span>
										</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="slider-response">
							<div class="rslides_container">
								<ul class="rslides" id="slidez">
									<li><img src="images/img1.jpg" alt=""></li>
									<li><img src="images/reserved.jpg" alt=""></li>
									<li><img src="images/candlelight.jpg" alt=""></li>
									<li><img src="images/onlineorder.jpg" alt=""></li>
									<li><img src="images/partyhall.jpg" alt=""></li>
									<li><img src="images/hygiene.jpg" alt=""></li>
								</ul>
							</div>

	                    </div>
					</div>

				<div class="wrap">
					<section class="col-1"><div class="wrap-col">
						<div class="box">
							<div>
								<h2> Find Your <span>Nearby Restaurant!</span></h2>
					</div>
					<div class="panel-body flex-grow">

					   <form role="form" class="form center-block" name="form1" action="list.php" method="POST">
						   <div class="form-group">
							   <label for="RestroName"><h4>Restaurant Name</h4></label>
							   <div class="input-group">
								   <input type="text" class="form-control" id="RestroName" name="RestroName" placeholder="Restaurant Name" >
							   </div>
						   </div>
						   <div class="form-group">
							   <label for="Checkout"><h4>Area</h4></label>
							   <div class="input-group">
								   <input type="text" class="form-control" id="Area" name="Area" placeholder="Area" >
							   </div>
						   </div>
						   </br>
						   </br>
							   <span class="input-group-btn">
							   <div class="text-center">
								   <button type="submit" class="btn" onClick="form1.submit();" name="RestroSearch">Search</button>
							   </div>
							   </span> </section>
					<section class="col-1-3"><div class="wrap-col">
						<div class="box">

					</div></section>
				</div>
			</article>
		</div>
	</div>
</div>
</div>

<div class="body2">
	<div class="main zerogrid">
		<article id="content2">
				<section class="col-2-3">

<div class="body3">
		<div class="main zerogrid">
				<article id="content2">
						<div class="wrapper">
												<section class="col-2-3">
					<h2>Restaurant on Nilai FOS</h2>
					<div class="wrapper">

	<marquee behavior="scroll" direction="up" scrollamount="3" height="300px;" scrolldelay="0" onmouseover="this.stop()" onmouseout="this.start()">
        <table cellspacing="0" cellpadding="0" width="96%" >
          <tr>
            <td align="center" valign="top"  style="vertical-align:middle"><div align="left">
                <p align="left">

						<div class="col-1-2"><div class="wrap-col">
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="images/adam2.jpg" height="110" width="110" alt=""></figure>
								<p>
									<a href="adam.php">Adam Western Seafood</a><br>
									Western and Seafood !
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/chemburi2.png" height="110" width="110" alt=""></figure>
								<p>
									<a href="chemburi.php">Chemburi Restaurant</a><br>
									Delicious traditional food especially kambing bakar (grilled lamb) !.
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/churros2.png" height="110" width="110" alt=""></figure>
								<p>
									<a href="churros.php">Churros</a><br>
									Take away our yum Wraps and enjoy the fillings !
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/mad2.png" height="110" width="110" alt=""></figure>
								<p>
									<a href="mad.php">Pak Mad Masakan Panas</a><br>
									Have the pleasure of finger licking tasty our dishes. Hot and perghhh !
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/pasta.2png" height="110" width="110" alt=""></figure>
								<p>
									<a href="pasta.php">Pasta Muchos Restaurant</a><br>
									 Lovers...have the pasta and it tastes awesome..... also...has awesome quantity. Muchos !
								</p>
							</div>
						</div></div>
						<div class="col-1-2"><div class="wrap-col">
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="images/pizza2.png" height="110" width="110" alt=""></figure>
								<p>
									<a href="pizza.php">Pizza Encik Berahim</a><br>
									 Pizza homemade ready to eat !
                                                                </p>
							</div>
						</div></div>

  </p>
            </div></td>
          </tr>
          <tr>
            <td align="center"  style="vertical-align:middle">&nbsp;</td>
          </tr>
        </table>
        </marquee>


					</div>
				</section>
				<section class="col-1-3"><div class="wrap-col">
					<h2>Testimonials</h2>
					<ul class="testimonials">
						<marquee behavior="scroll" direction="up" scrollamount="2" height="300px;" scrolldelay="0" onmouseover="this.stop()" onmouseout="this.start()">
 <table cellspacing="0" cellpadding="0" width="96%" >
          <tr>
            <td align="center" valign="top"  style="vertical-align:middle"><div align="left">
                <p align="left">
						<li >
							<span>1</span>
							<p>"Great service. Love it."-
								<b>Encik Baharum, Pizza Encik Berahim</b>
								<!--img src="images/signature1.jpg" alt=""-->
							</p>
						</li>
						<li >
							<span>2</span>
							<p>
								“Service is superb. Foods are hygenic on all restaurant here.��?
								<b>Nur Juuyah, Taman Desa Kasia</b>
							</p>
						</li>
						<li >
							<span>3</span>
							<p>
								“At lunchtime, people head to Nilai FOS. It is the best place to order lunch without wasting time. Order, pray solah zohor while waiting for food arrival. Save our lunchtime !��?
								<b>Ameer Khan, Lecturer at Moneyypal University</b>
							</p>
						</li>
						<li >
							<span>4</span>
							<p>
								“Loved NILAI FOS ! Hope there is more restaurant coming here for Nilai residences. ��?
								<b>Puan Zaiton, Putra Nilai</b>
							</p>
						</li>
						<li >
							<span>5</span>
							<p>
								“Nilai FOS is simply the BEST ! Great Platform...all at very reasonable prices. It just doesn't get any better. HIGHLY RECOMMENDED!��?
								<b>Encik Johari, Nilai Impian</b>
							</p>
						</li>
						<li >
							<span>6</span>
							<p>
								“Lapar? Malas keluar? Itu saya. Nilai FOS dapat memenuhi kehendak makan saya tanpa perlu keluar rumah ! Klik klik, pilih restaurant, menu, order dan makanan terus sampai ke rumah"��?
								<b>Yati, Student USIM</b>
							</p>
						</li>
						 </p>
            </div></td>
          </tr>
          <tr>
            <td align="center"  style="vertical-align:middle">&nbsp;</td>
          </tr>
        </table>
					</marquee>
					</ul>
				</div></section>
			</div>
		</article>
<!-- / content -->
	</div>
</div>
<div class="body4">
		<div class="main zerogrid">

<!-- footer -->
			<?php include("footer.php"); ?>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
