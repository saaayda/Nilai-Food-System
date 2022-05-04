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
  <script type="text/javascript">
$(document).ready(function() { 

    $('#btnSubmit').click(function() {  

        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var emailaddressVal = $("#email").val();
        if(emailaddressVal == '') {
            $("#email").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }

        else if(!emailReg.test(emailaddressVal)) {
            $("#email").after('<span class="error">Enter a valid email address.</span>');
            hasError = true;
        }

        if(hasError == true) { return false; }

    });
});

</script>

					
<div id="form_wrapper" class="form_wrapper">
	 <table>
					<form class="register active"  id="myForm" method="POST" action="insertCustomer.php">

   
       <th colspan="3"><h2>CUSTOMER REGISTRATION:</h2> </th> 
						
						
						   
   
   <tr>
    <td>  

		<label> Email:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>

	
	</td>
    <td>   



		<label> FullName:</label>
		<input type="text" name="name" />
		<span class="error">This is an error</span>
							
   </td>


   </tr>
   
    <tr>
    <td>  

		<label>Password:</label>
		<input type="password" name="password1" id="password1" />

	</td>
	
   <td>   
     	  <label>UserName:</label>
			<input type="text" name="username" id="username"/>
			<span class="error">This is an error</span>

	</td>

   </tr>
   
   <tr>
    <td>  

		<label> Re-Password:</label>
		<input type="password" name="password2"id="password2" />  
		<div id="pass-info"> </div>
	</td>
	
   <td>   
     
			<label> Phone:</label>
			<input type="text" name="tell" id="tell"/>
			<span class="error">This is an error</span>

   </td>
   
   
   </tr>
   
    <tr>
    <td>   
	
		<label> Country:</label>
        <script type="text/javascript" src="js/countries.js"></script>
        <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>

   </td>
   
    <td>   

        <label>Address:</label>
		<input type="text" name="address" id="address"/>
		<span class="error">This is an error</span>   
		

   </td>
   
   </tr>
   
   
   <tr>
      <td>   
  
            <label> City:</label>
			<select name ="City" id ="state"></select>
		    <script language="javascript">print_country("country");</script>
			<span class="error">This is an error</span>
    </td>
   
      <td>   
   
			<label>Postal code:</label>
			<input type="text" name="pcode" id="pcode"/>
			<span class="error">This is an error</span>

   </td>
   
   </tr>
   
   
  <tr>
						<div class="bottom">

						<td colspan="3">	
						<button  id="btnSubmit" type="submit" name="submit"> Register</button>
							
							<div class="clear"></div>
						</div>
						
		
   </tr>
					</form>

					</table>
					
					
<script type="text/javascript">

$(document).ready(function(){ 
    $("#btnSubmit").click(function() { 
    alert("Proceed ? ");
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'insertCustomer.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>

					
				</div>
	   			

			</div>

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
