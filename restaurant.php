<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Restaurant List | Nilai FOS</title>
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
			
<div class="body2">
	<div class="main zerogrid">
		<div class="wrap">
			<section class="col-1"><div class="wrap-col">
				<div class="box">
					<div>
		<article id="content2">
			<section>

<table id="myTable">
<th align="center">
    <th style="width:20%;">RESTAURANT</th>
    <th style="width:40%;">AREA</th>
  </tr>
  <tr>
  <td align="center">
      <form  action ="adam.php?list=1&mid=3" method ="POST">
      <td> <input type="submit" name="R_name" value="Adam Western Seafood"></td>
      </form>
    <td> Bandar Baru Nilai</td>
  </tr>
	<tr>

  <tr>
  <td align="center">
      <form  action ="pizza.php?list=8&mid=3" method ="POST">
    <td><input type="submit" name="R_name" value="Pizza Encik Berahim"></td>
      </form>
    <td>Semarak</td>
  </tr>
  <tr>
  <td align="center">
     <form  action ="pasta.php?list=12&mid=3" method ="POST">
    <td><input type="submit" name="R_name" value="Pasta Muchos Restaurant"></td>
      </form>
    <td>Bandar Baru Nilai</td>
  </tr>
  <tr>
  <td align="center">
     <form  action ="chemburi.php?list=14&mid=3" method ="POST">
    <td><input type="submit" name="R_name" value="Chemburi Restaurant"></td>
      </form>
    <td>Bandar Baru Nilai</td>
  </tr>
  <tr>
  <td align="center">
     <form  action ="churros.php?list=15&mid=3" method ="POST">
    <td><input type="submit" name="R_name" value="Churros"></td>
      </form>
    <td>Nilai 7</td>
  </tr>
  <tr>
  <td align="center">
     <form  action ="mad.php?list=18&mid=3" method ="POST">
    <td><input type="submit" name="R_name" value="Pak Mad Masakan Panas"></td>
      </form>
    <td>Nilai Impian</td>
  </tr>

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


        </div>
  <p></p>
  	</div>
</div>
<div class="body4">
		<div class="main zerogrid">
</footer>
<!-- footer -->
			<?php include("footer.php"); ?>
<!-- / footer -->
</body>
</html>
