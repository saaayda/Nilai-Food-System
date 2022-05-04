<?php
	// include PDOHelper.php file.
	include_once './PDOHelper.php';
	// open session.
	session_start();
	
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>List of Hotel</title>
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript" language="javascript"></script>-->
	
	
	
	<meta charset="utf-8">
	<title>List of Hotel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
                                     initial-scale=1.0, 
                                     maximum-scale=1.0, 
                                     user-scalable=no">



    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	

</head>
  <body style='background-image: url("./img/background.jpg")'>
	<!-- Header -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="index.php">Hotel Info</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
		   <li class="active"><a href="index.php">Home</a></li>
		   <li class="active"><a href="#">About</a></li>
		   
		   <li><a href="#" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user"></span><?php echo $username;?></a></li>
		   
			<?php if($isLogin == false){?>
		   <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>Go Back</a></li>
		   <?php }
		   else
		   {
			   echo "<li><a href='#' onclick='ajaxLogOut()'><span class='glyphicon glyphicon-log-out'></span> Log Out</a></li>";
		   }?>
		</ul>
	  </div>
	</nav>
	
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
				<td class="success"><?php echo $Restaurant['Delivery'];?></td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
	</div>
	</div>
		<div class="contrain"><div class="col-md-3"></div><div class="col-md-8">Have <?php echo $count;?> Records,Each page display <?php echo $pagecount;?> record,Total <?php echo $pages;?> Page <?php echo $page;?> Page,
		<a href="list.php?page=<?php echo ($page == 1) ? $page : $page-1;?>" >Last Page</a>,
		<a href="list.php?page=<?php echo ($page == $pages) ? $pages : ($page + 1);?>">Next Page</a></div></div>
	</div>
	
	
		<!-- footer -->
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