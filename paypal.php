<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Pay with PayPal</title>
	<link rel="stylesheet" type="text/css" href="css/b1.css">
<script type="text/javascript">
function validateForm()
{
var x=document.forms["my"]["eadd"].value
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var x=document.forms["my"]["pass"].value
if (x==null || (x.length<8))
{
  alert("Please enter your correct password");
  return false;
  }

var x=document.forms["my"]["add"].value
if (x==null || x=="")
  {
  alert("Please enter your address");
  return false;
  }

}
</script>
</head> </div> <div class="col-sm-4" align="center">

<body>
<br>
<br>
<span style="color: rgb(51, 104, 155); font-family: Arial, Helvetica, sans-serif; font-size: 26px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: 21px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-decorations-in-effect: none; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">
    Pay with Paypal Account</span><br />
		<br>

	<img src="images/paypal.png" />

<form name="my" action="paypals.php" onsubmit="return validateForm()" method="post">

	<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
	E-mail Address
				<input id="eadd" maxlength="19" name="eadd" type="text" value="" /></span></p>

	<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
	Password</span></label>
	<input id="pass" maxlength="19" name="pass" type="password" value="" /></span></p>

	<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
		Billing Address</span></label>
	<input id="add" maxlength="19" name="add" type="text" value="" /></span></p>


<br>
<input type="submit" value="Submit" />
<input type="reset" value="Cancel" />

</form>


<?php
session_destroy();
?>

</body>
</html>
