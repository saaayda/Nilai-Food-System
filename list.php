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

<?php
	// include PDOHelper.php file.
	include_once './PDOHelper.php';
	// open session.
	
	// user search hetol info.
	if(isset($_POST["RestroSearch"]))
	{		
		// check $_SESSION['username'] whether is set. 
		if(isset($_SESSION['username'])){
			if($_SESSION['username'] == ""){
				// user is not login, so username is "visitor"
				$username = "visitor";
			}
			else{
				// get user name.
				$username = $_SESSION['username'];
			}		
		}
		else{
			// user is not login, so username is "visitor"
			$username = "visitor";
		}
		
		// get  name.
		$_SESSION["RestroName"] = $_POST["RestroName"];
		// get city name.
		$_SESSION["Area"]  = $_POST["Area"];
	}
	else{
		// user is not login, so username is "visitor"
			$username = "visitor";
	}
	
				// set page.
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
	
		$isLogin = ""; // set flag for login.
		$meg = ""; // error message.
		
		// check  name and area.
		if($_SESSION["RestroName"] != "" && $_SESSION["Area"] != ""){			
			$sql = "SELECT * FROM HotelInfo WHERE Restro_Name = '{$_SESSION['RestroName']}' AND Area = '{$_SESSION['Area']}'";
			//var_dump($sql);
		}
		else if($_SESSION["RestroName"] == "" && $_SESSION["Area"] != ""){
			$sql = "SELECT * FROM RestroInfo WHERE Area = '{$_SESSION['Area']}'";
		}
		else if($_SESSION["RestroName"] != "" && $_SESSION["Area"] == ""){
			$sql = "SELECT * FROM RestroInfo WHERE Restro_Name = '{$_SESSION['RestroName']}'";
		}
		else{
			$sql = "";
		}
		
		// each page hold 5 records.
		$pagecount = 5;

		// get how many records will get.
		
		// using PDOHelper to connect database.
		$pdo = new PDOHelper(array('charset' => 'utf8'));

		$res = $pdo->getAll($sql);
		// if database return zero records.
		if($res === false || count($res) == 0){
			// set error message.
			$meg = "No record in database.";
		}
		
		// get total records.
		$count = count($res);
		
		// calculate how many pages.
		$pages = ceil($count / $pagecount);

		if($page < 1) $page = 1;
		if($page > $pages) $page = $pages;
		
		// get position of page.
		$offset = ($page - 1) * $pagecount;
		
		// get each page records.
		$sql = $sql . " limit {$offset},{$pagecount}";
		$res = $pdo->getAll($sql);

?>
</head>
<body id="page3">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			<?php include_once("header.php"); ?>
<!-- / header -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
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

	<div class="contrain">
		<div class="row">
			<div class="col-md-2"></div><span id="errorMessage" style="color:red"><?php if($meg == "") {}else{echo $meg;}?></span>
		</div>
	</div>
	
	<div class="contrain">
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-hover table-inverse table-responsive">
			<tr class="active">
				<th>Id</th>
				<th>Restaurant Name</th>
				<th>Restaurant Rating</th>
				<th>City</th>
				<th>Area</th>
				<th>Delivery</th>
			</tr>
			<?php if($res === false || count($res) == 0){
				
			}else
				foreach($res as $Restaurant):?>
			<tr class="active">
				<td class="active"><?php echo $Restaurant['RestroInfo_ID'];?></td>
				<td class="success"><?php echo $Restaurant['Restro_Name'];?></td>
				<td class="warning"><?php echo $Restaurant['Restro_Rating'];?></td>
				<td class="danger"><?php echo $Restaurant['City'];?></td>
				<td class="info"><?php echo $Restaurant['Area'];?></td>
				<td class="success"><?php echo $Restaurant['delivery'];?></td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
										<center>
										<a href="restaurant.php" class="button1" onClick="document.getElementById('ContactForm').submit()">Restaurant List</a>
	</div>
	</div>
		<div class="contrain"><div class="col-md-3"></div><div class="col-md-8">Have <?php echo $count;?> Records,Each page display <?php echo $pagecount;?> record,Total <?php echo $pages;?> Page <?php echo $page;?> Page,
		<a href="list.php?page=<?php echo ($page == 1) ? $page : $page-1;?>" >Last Page</a>,
		<a href="list.php?page=<?php echo ($page == $pages) ? $pages : ($page + 1);?>">Next Page</a></div></div>
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

</body>
</html>
