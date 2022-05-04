<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Chemburi Restaurant | Menu</title>
	<meta name="description" content="Nilai FOS is the only food counter which has the facility of online and on call home delivery with a take away food counter as well. This is an easily reachable outlet for ensuring a constant supply of our mouth-watering dishes to the customers." />
	<meta name="keywords" content="Best Catering Services, Order Food Online, Restaurant Home Delivery, Tandori Food Delivery, Chinese Food Patna"/>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
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
<body id="page3">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			<?php include_once("header.php"); ?>
<!-- / header -->
<!-- content -->

		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid">
		<article id="content2">

								
						<h2>Our Location</h2>

													 Jalan BBN 7<br> 71800 Bandar Baru Nilai <br>
              							
							<iframe src="https://www.google.com/maps/embed/v1/view?key=AIzaSyAUhxYepR8s5xcQqGKHrtY6ChfX5VbbTmA&center=2.831173,101.788053&zoom=14&maptype=satellite" width="200" height="200" frameborder="0" style="border:0"></iframe>
							<br>
							<br>


<div class="body3">
		<div class="main zerogrid">
				<article id="content2">
						<div class="wrapper">

					<h2>Chemburi Restaurant [ Menu List ]</h2>
					<div class="wrapper">

							<figure class="pad_bot1"><img src="images/chemburi2.png" alt=""></figure>
							<!--Adam gives you multiple option of food delivery. We deliver the food to your Home or you can take it away from us.
							--><ul class="price">
								<li><a href="chemburi.php?list=13&mid=3">SET</a><span></span></li>
								<li><a href="chemburi.php?list=14&mid=3">Nasi Lemak</a><span></span></li>
								<li><a href="chemburi.php?list=1&mid=3">Lain-lain</a><span></span></li>
								<li><a href="chemburi.php?list=4&mid=3">Ayam / Daging</a><span></span></li>
								<li><a href="chemburi.php?list=5&mid=3">Sotong / Udang</a><span></span></li>
								<li><a href="chemburi.php?list=1&mid=3">Lain-Lain</a><span></span></li>
								<li><a href="chemburi.php?list=6&mid=3">Air (Sejuk)</a><span></span></li>
								<li><a href="chemburi.php?list=7&mid=3">Jus Buah</a><span></span></li>

						</div></div>
							</ul>
						</div></div>
					<h2 align="center">
					<?php
					if($_REQUEST["list"]==13) echo '<img src="" height="100" width="100" alt="">&raquo;SET ';
					if($_REQUEST["list"]==14) echo '<img src="" height="100" width="100" alt="">&raquo;Nasi Lemak ';
					if($_REQUEST["list"]==1) echo '<img src="images/adam/nputih.jpg" height="100" width="100" alt="">&raquo;Lain-lain ';
					if($_REQUEST["list"]==2) echo '<img src="images/adam/ngusa.jpg" height="100" width="100" alt="">&raquo;Nasi Goreng ';
					if($_REQUEST["list"]==4) echo '<img src="" height="100" width="100" alt="">&raquo;Ayam / Daging ';
					if($_REQUEST["list"]==5) echo '<img src="" height="100" width="100" alt="">&raquo;Sotong / Udang ';
					if($_REQUEST["list"]==6) echo '<img src="images/adam/dmiloais.jpg" height="100" width="100" alt="">&raquo;Air (Sejuk) ';
					if($_REQUEST["list"]==7) echo '<img src="" height="100" width="100" alt="">&raquo;Jus Buah ';

					?>
					</h2>


 <?php
// 1- **************************************************************************
	//if($_GET['id']==1)
	//{//if 1 strats

    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

	$results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) {

        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
		if($_GET['list']==$obj->prod_cate)
		{
			echo '<div class="col-1-2"><div class="wrap-col">';
            echo '<form method="post" action="cart_update.php">';
			//echo '<div class="product-thumb"><img src="cartimages/'.$obj->product_img_name.'"></div>';
            echo '<div ><h3>'.$obj->product_name.'</h3>' ;
            echo '<div >';
			echo ''.$currency.$obj->price.' | ';
            echo 'Enter Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="button1">Add To Cart</button>';
			echo '</div></div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }//if $GET id
		}//while

    }

	//}//if 1 ends
    ?>



					</div><br>
					<br>

<h6><h6 align="center"><a href="view_cart.php"><img src="images/cart.png" height="50" width="50"/>Your Order </a></h6><h6 align="center">
		<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
       // echo '<li >';
        //echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        //echo '<h3>'.$cart_itm["name"].'</h3>';
      //  echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
       // echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        //echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        //echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php" class="btn">Check-out!</a></span>';
	//echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'" >Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>

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

	<section class="col-1-3"><div class="wrap-col">


			</div>
		</div>
	</div></section>

				</div>
			</section>
		</article>
<!-- / content -->
	</div>
</div>

<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
		<?php include("footer.php"); ?>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
