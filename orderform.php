<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Online Order Form-Food Delivery|Nilai FOS</title>
	<meta name="description" content="India City Foods  is the only food counter which has the facility of online and on call home delivery with a take away food counter as well. This is an easily reachable outlet for ensuring a constant supply of our mouth-watering dishes to the customers." />
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
<script type="text/javascript">
		function check()
		{
		var n=document.forms["mF"].["NameCon"].value;
		var email=document.forms["mF"].["emailCon"].value;
		var no=document.forms["mF"].["phoneCon"].value;
		var msg=document.forms["mF"].["MsgCon"].value;
		if (n==null || n=="")
		{
		alert("Name must be filled out");
		return false;
		}
		else if (!Number(no) || no=="" || no<=0)
		{
		alert("Mobile no  must be filled out & It must be a No");
		return false;
		}
		if (msg==null || msg=="")
		{
		alert("Message field is Empty");
		return false;
		}
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
 }
</script>		
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
<body id="page5">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			
				<?php if(!isset($_SESSION["products"]))
				{ header('Location:index.php');
				}
				else {
				include("header.php"); 
				
				?>
			
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Order <span>Form</span></h2>
							<?php if(isset($_REQUEST['thank']))
	{ ?>
	<span>Thanks for your Feedback.</span>
	<?php	}
	else { ?>
     <span>Please fill all the texts in the fields.</span><br>
	 <?php
	 }
	?>
							<form id="ContactForm" name="mF" onSubmit="return check()" action="orderformsubmit.php" method="POST">
								<div>
									<div class="wrapper">
										<span>Your Name:</span>
										<input type="text" class="input" name="name" required >
									</div>
									<div class="wrapper">
										<span>Your E-mail:</span>
										<input type="text" class="input" name="email" >								
									</div>
									<div class="textarea_box">
										<span>Your Address:</span>
										<textarea cols="1" rows="1"  name="address" ></textarea>								
									</div>
									<div class="wrapper">
										<span>City:</span>
										<input type="text" class="input" name="city" required >
									</div>
									<div class="wrapper">
										<span>Zip Code:</span>
										<input type="text" class="input" name="zip" required >
									</div>
									<div class="wrapper">
										<span>Mobile:</span>
										<input type="text" class="input" name="mobile" >								
									</div>
									<div class="textarea_box">
										<span>Comment:</span>
										<textarea cols="1" rows="1"  name="comment" ></textarea>								
									</div>
									<div class="wrapper">
										<span>Mode of Payment:</span>
										<select class="input" name="selection">
									<option value="COD">Cash on Delivery</option>
									<option value="TA">Take Away</option>
									</select>								
									</div>
									<br>
						
									</div>
							
									
									<center>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Submit Order</a>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Clear</a>		
									</center>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>

				</div>
			</section>
		</article>
<!-- / content -->
	</div>
</div>
<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
		<?php include("footer.php"); 
		}//else isset session
		?>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>